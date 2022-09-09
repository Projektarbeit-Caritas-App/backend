<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as PasswordRule;

/**
 * @group Password reset
 * @unauthenticated
 */
class PasswordForgottenController extends Controller
{
    /**
     * Initiate Password Reset
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Allow a user to request a reset of his password.
     * An E-Mail with the Token will be sent, if we can find a user with the given E-Mail-Address.
     *
     * @response scenario=success status=200 {
     *   "success": true,
     *   "message": "We have emailed your password reset link!"
     * }
     * @response scenario=failure status=400 {
     *   "success": false,
     *   "message": "We can't find a user with that email address."
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function forgot(Request $request): Application|ResponseFactory|Response
    {
        $validated = $request->validate([
            // Registered E-Mail-Address of the user who forgot the password
            'email' => 'email:rfc,dns|required'
        ]);
        $status    = Password::sendResetLink(['email' => $validated['email']]);

        return response([
            'success' => $status === Password::RESET_LINK_SENT,
            'message' => __($status)
        ], $status === Password::RESET_LINK_SENT ? 200 : 400);
    }

    /**
     * Password Reset
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Reset the password of the given user. It is required to initiate the request to receive the mail with the reset-token.
     *
     * @response scenario=success status=200 {
     *   "success": true,
     *   "message": "Your password has been reset!"
     * }
     * @response scenario=failure status=400 {
     *   "success": false,
     *   "message": "This password reset token is invalid."
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     */
    public function reset(Request $request): Response|Application|ResponseFactory
    {
        $validated = $request->validate([
            // Token that was sent to the user via E-Mail
            'token' => 'required',

            // Registered E-Mail-Address of the user who forgot the password
            'email' => 'string|required',

            // New password for the user
            'password' => ['string', 'confirmed', 'required', PasswordRule::defaults()],
        ]);

        $status = Password::reset(
            $validated,
            function (User $user, $password) {
                $user->password = Hash::make($password);
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return response([
            'success' => $status === Password::PASSWORD_RESET,
            'message' => __($status)
        ], $status === Password::PASSWORD_RESET ? 200 : 400);
    }
}
