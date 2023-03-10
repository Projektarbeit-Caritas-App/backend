<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageUserStoreRequest;
use App\Http\Requests\ManageUserUpdateRequest;
use App\Models\Instance;
use App\Models\User;
use App\Service\ModelFilterService;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group User
 * @authenticated
 */
class UserManagerController extends Controller
{
    /**
     * List all Users
     *
     * @response {
     *   "items": [
     *     {
     *       "id": 3,
     *       "instance_id": 3,
     *       "organization_id": 3,
     *       "name": "Rene",
     *       "email": "rene@web.de",
     *       "created_at": "2022-08-21T11:34:55.000000Z",
     *       "updated_at": "2022-08-21T11:34:55.000000Z"
     *     }
     *   ],
     *   "meta": {
     *     "current_page": 1,
     *     "last_page": 1,
     *     "per_page": 25,
     *     "item_count": 1
     *   },
     *   "links": {
     *     "prev_page_url": null,
     *     "next_page_url": null
     *   }
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Organization
            'organization_id' => 'exists:organizations,id|nullable',

            // Name contains
            'name' => 'string|nullable',

            // E-Mail contains
            'email' => 'string|nullable',

            // Sort by given field
            'sort' => 'string|in:id,organization_id,name,email|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable',

            // Items per page
            'limit' => 'integer|min:10|max:500|nullable'
        ]);

        $query = User::where('instance_id', $request->user()->instance_id)->with('roles');

        if (!$request->user()->hasPermissionTo('admin.user.index')) {
            $query->where('organization_id', $request->user()->organization_id);
        }

        $return = ModelFilterService::apiPaginate(ModelFilterService::filterEntries($query, [
            'organization_id' => 'match',
            'name' => 'contains',
            'email' => 'contains'
        ], $filters), $filters['limit'] ?? 25);

        foreach ($return['items'] as &$user) {
            $user = [
                'id' => $user->id,
                'instance_id' => $user->instance_id,
                'organization_id' => $user->organization_id,
                'name' => $user->name,
                'email' => $user->email,
                'roles' => $user->roles->pluck('name'),
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at
            ];
        }

        return $return;
    }

    /**
     * Create new User
     *
     * @param \App\Http\Requests\ManageUserStoreRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageUserStoreRequest $request): Model
    {
        $validated = $request->validated();
        $instance  = Instance::find($request->user()->instance_id);

        if (
            !$request->user()->hasPermissionTo('admin.user.store') &&
            $validated['organization_id'] != $request->user()->organization_id
        ) {
            abort(403);
        }

        if (!$request->user()->hasPermissionTo('admin.user.assign.role.' . $validated['role'])) {
            abort(403);
        }

        /** @var User $user */
        $user = $instance->users()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'organization_id' => $validated['organization_id']
        ]);

        if ($request->user()->id !== $user->id) {
            $user->syncRoles($validated['role']);
        }

        return $user;
    }

    /**
     * Show specified User
     *
     * @param \App\Models\User $user
     * @return array
     */
    public function show(User $user): array
    {
        return [
            'id' => $user->id,
            'instance_id' => $user->instance_id,
            'organization_id' => $user->organization_id,
            'name' => $user->name,
            'email' => $user->email,
            'roles' => $user->roles->pluck('name'),
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at
        ];
    }

    /**
     * Update specified User
     *
     * @param \App\Http\Requests\ManageUserUpdateRequest $request
     * @param \App\Models\User $user
     * @return \App\Models\User
     */
    public function update(ManageUserUpdateRequest $request, User $user): User
    {
        $validated = $request->validated();

        if (!$request->user()->hasPermissionTo('admin.user.assign.role.' . $validated['role'])) {
            abort(403);
        }

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'organization_id' => $validated['organization_id']
        ];

        if (!empty($validated['password'])) {
            $data['password'] = Hash::make($validated['password']);
        }

        $user->update($data);

        if ($request->user()->id !== $user->id) {
            $user->syncRoles($validated['role']);
        }

        $user->tokens()->delete();

        return $user;
    }

    /**
     * Delete specified User
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\User $user
     * @return array
     */
    public function destroy(User $user): array
    {
        $user->tokens()->delete();
        return ['success' => $user->delete()];
    }
}
