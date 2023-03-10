<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;
use Laravel\Sanctum\PersonalAccessToken;

/**
 * @group Authentication
 */
class AuthController extends Controller
{
    /**
     * Create session and XSRF-Token
     *
     * Required to initialise a new Cookie-Session for SPAs.
     * Do not use this endpoint if you want to use Token-Auth.
     *
     * @unauthenticated
     * @header Referer {URL of your SPA}
     * @response status=204
     *
     * @param \Illuminate\Http\Request $request
     * @param \Laravel\Sanctum\Http\Controllers\CsrfCookieController $controller
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function handshake(Request $request, CsrfCookieController $controller): Response|JsonResponse
    {
        return $controller->show($request);
    }

    /**
     * Login with SPA-Session (Cookies)
     *
     * After you send a GET-request to <code>/api/handshake</code>, which will create the Session and give you a XSRF-Token,
     * you can send your Credentials to this endpoint and authenticate your session.
     *
     * All further requests are now authenticated through cookies and do not require an Authorization-Header.
     *
     * <aside class="warning">
     *   If you get an Error 419, make sure your Request contains the X-XSRF-TOKEN header.
     *   <p>
     *     You can enable this in axios with the following line:
     *     <pre style="float: none; width: 100%;"><code>axios.defaults.withCredentials = true;</code></pre>
     *   </p>
     * </aside>
     *
     * @unauthenticated
     * @header Referer {URL of your SPA}
     * @header X-XSRF-TOKEN {Your XSRF-Token}
     *
     * @response status=200 scenario="Valid credentials" {
     *   "success": true,
     *   "user": {
     *     "id": 1,
     *     "name": "Example User",
     *     "email": "example@localhost.test",
     *     "roles": [
     *       "instance_manager"
     *     ],
     *     "permissions": [
     *       "card.external",
     *       "card.manage",
     *       "card.view",
     *       "limits.manage",
     *       "organisation.manage",
     *       "organisation.view",
     *       "shop.manage",
     *       "shop.view",
     *       "stats.view",
     *       "user.manage",
     *       "user.view"
     *     ],
     *     "instance": {
     *       "id": 1,
     *       "name": "Example Instance",
     *       "street": "Teststreet 123",
     *       "postcode": "12345",
     *       "city": "Test",
     *       "contact": "example@localhost.test",
     *       "created_at": "2022-08-02T11:59:43.000000Z",
     *       "updated_at": "2022-08-02T11:59:43.000000Z"
     *     },
     *     "organization": {
     *       "id": 1,
     *       "name": "Example Organisation",
     *       "street": "Teststreet 123",
     *       "postcode": "12345",
     *       "city": "Test",
     *       "contact": "example@localhost.test",
     *       "created_at": "2022-08-02T11:59:44.000000Z",
     *       "updated_at": "2022-08-02T11:59:44.000000Z"
     *     },
     *     "created_at": "2022-08-02T11:59:44.000000Z",
     *     "updated_at": "2022-08-02T11:59:44.000000Z"
     *   }
     * }
     * @response status=401 scenario="Invalid credentials" {
     *   "success": false
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function login(Request $request): Response|Application|ResponseFactory
    {
        $credentials = $request->validate([
            // E-Mail of the user
            'email' => 'required|string',

            // Password of the user
            'password' => 'required|string'
        ]);

        if (Auth::attemptWhen($credentials, function (User $user) {
            return $user->hasPermissionTo('auth.admin');
        })) {
            $request->session()->regenerate();

            /** @var User $user */
            $user = User::with(['permissions', 'roles', 'instance', 'organization'])
                ->find(Auth::user()->id);

            $this->upgradePassword($user, $credentials['password']);

            return response([
                'success' => true,
                'user' => $this->getUserData($user)
            ], 200);
        } else {
            return response([
                'success' => false
            ], 401);
        }
    }

    /**
     * Login with Bearer Token (Authorization Header)
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * If you are not able to use Cookies, for example in a mobile application, you can use Token-Auth instead.
     * Tokens will be valid for 20 hours before they expire.
     *
     * <aside class="warning">
     *   Endpoints under the <code>/admin</code> path will not be available for Applications using Token-Auth.
     * </aside>
     *
     * @unauthenticated
     * @response status=200 scenario="Valid credentials" {
     *   "success": true,
     *   "token": "{YOUR_AUTH_KEY}",
     *   "user": {
     *     "id": 1,
     *     "name": "Example User",
     *     "email": "example@localhost.test",
     *     "roles": [
     *       "instance_manager"
     *     ],
     *     "permissions": [
     *       "card.external",
     *       "card.manage",
     *       "card.view",
     *       "limits.manage",
     *       "organisation.manage",
     *       "organisation.view",
     *       "shop.manage",
     *       "shop.view",
     *       "stats.view",
     *       "user.manage",
     *       "user.view"
     *     ],
     *     "instance": {
     *       "id": 1,
     *       "name": "Example Instance",
     *       "street": "Teststreet 123",
     *       "postcode": "12345",
     *       "city": "Test",
     *       "contact": "example@localhost.test",
     *       "created_at": "2022-08-02T11:59:43.000000Z",
     *       "updated_at": "2022-08-02T11:59:43.000000Z"
     *     },
     *     "organization": {
     *       "id": 1,
     *       "name": "Example Organisation",
     *       "street": "Teststreet 123",
     *       "postcode": "12345",
     *       "city": "Test",
     *       "contact": "example@localhost.test",
     *       "created_at": "2022-08-02T11:59:44.000000Z",
     *       "updated_at": "2022-08-02T11:59:44.000000Z"
     *     },
     *     "created_at": "2022-08-02T11:59:44.000000Z",
     *     "updated_at": "2022-08-02T11:59:44.000000Z"
     *   }
     * }
     * @response status=401 scenario="Invalid credentials" {
     *   "success": false
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function token(Request $request): Response|Application|ResponseFactory
    {
        $credentials = $request->validate([
            // E-Mail of the user.
            'email' => 'required|string',

            // Password of the user.
            'password' => 'required|string',

            // Name of the device, used for identification of the token.
            'device_name' => 'required|string|max:125'
        ]);

        $user = User::with(['permissions', 'roles', 'instance', 'organization'])
            ->where('email', $credentials['email'])
            ->get()
            ->first();

        if (!$user || !Hash::check($credentials['password'], $user->password) || !$user->hasPermissionTo('auth.app')) {
            return response([
                'success' => false
            ], 401);
        } else {
            $this->upgradePassword($user, $credentials['password']);

            return response([
                'success' => true,
                'token' => $user->createToken($credentials['device_name'], ['app'])->plainTextToken,
                'user' => $this->getUserData($user)
            ], 200);
        }
    }

    /**
     * Heartbeat
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Checks if the session is still valid and active and returns information about the authenticated user.
     *
     * <aside class="warning">
     *     This endpoint does NOT change the active session and therefore is unable to increase the lifetime of the session.
     *     Its purpose is only for testing if the session is still valid and active.
     * </aside>
     *
     * @authenticated
     * @response status=200 {
     *   "success": true,
     *   "user": {
     *     "id": 1,
     *     "name": "Example User",
     *     "email": "example@localhost.test",
     *     "roles": [
     *       "instance_manager"
     *     ],
     *     "permissions": [
     *       "card.external",
     *       "card.manage",
     *       "card.view",
     *       "limits.manage",
     *       "organisation.manage",
     *       "organisation.view",
     *       "shop.manage",
     *       "shop.view",
     *       "stats.view",
     *       "user.manage",
     *       "user.view"
     *     ],
     *     "instance": {
     *       "id": 1,
     *       "name": "Example Instance",
     *       "street": "Teststreet 123",
     *       "postcode": "12345",
     *       "city": "Test",
     *       "contact": "example@localhost.test",
     *       "created_at": "2022-08-02T11:59:43.000000Z",
     *       "updated_at": "2022-08-02T11:59:43.000000Z"
     *     },
     *     "organization": {
     *       "id": 1,
     *       "name": "Example Organisation",
     *       "street": "Teststreet 123",
     *       "postcode": "12345",
     *       "city": "Test",
     *       "contact": "example@localhost.test",
     *       "created_at": "2022-08-02T11:59:44.000000Z",
     *       "updated_at": "2022-08-02T11:59:44.000000Z"
     *     },
     *     "created_at": "2022-08-02T11:59:44.000000Z",
     *     "updated_at": "2022-08-02T11:59:44.000000Z"
     *   }
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     */
    public function heartbeat(Request $request): Response|Application|ResponseFactory
    {
        return response([
            'success' => true,
            'user' => $this->getUserData($request->user())
        ], 200);
    }

    /**
     * Logout
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Invalidate your current session/token
     *
     * @authenticated
     * @response {
     *   "success": true
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     */
    public function logout(Request $request): Response|Application|ResponseFactory
    {
        if ($request->user()->currentAccessToken() instanceof PersonalAccessToken) {
            $request->user()->tokens()->where('id', $request->user()->currentAccessToken()->id)->delete();
        } else {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return response([
            'success' => true
        ], 200);
    }

    /**
     * @param \App\Models\User $user
     * @return array
     */
    private function getUserData(User $user): array
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'roles' => $user->roles->pluck('name'),
            'permissions' => $user->getAllPermissions()->pluck('name'),
            'instance' => $user->instance,
            'organization' => $user->organization->makeHidden('instance_id'),
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at
        ];
    }

    private function upgradePassword(User $user, string $password)
    {
        if (Hash::needsRehash($user->password)) {
            $user->password = Hash::make($password);
            $user->save();
        }
    }
}
