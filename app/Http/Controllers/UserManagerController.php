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
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(User::where('instance_id', $request->user()->instance_id), [
            'organization_id' => 'match',
            'name' => 'contains',
            'email' => 'contains'
        ], $filters));
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
        $instance = Instance::find($request->user()->instance_id);

        /** @var User $user */
        $user = $instance->users()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'organization_id' => $validated['organization_id']
        ]);

        if ($request->user()->id !== $user->id) {
            $user->syncRoles([$validated['role']]);
        }
        return $user;
    }

    /**
     * Show specified User
     *
     * @param \App\Models\User $user
     * @return \App\Models\User
     */
    public function show(User $user): User
    {
        return $user;
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

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'organization_id' => $validated['organization_id']
        ];

        if ($validated['password'] !== null) {
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
     * @param \App\Models\User $user
     * @return array
     */
    public function destroy(User $user): array
    {
        $user->tokens()->delete();
        return ['success' => $user->delete()];
    }
}
