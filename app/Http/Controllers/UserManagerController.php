<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageUserRequest;
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
     * @param \App\Http\Requests\ManageUserRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageUserRequest $request): Model
    {
        $validated = $request->validated();
        $instance = Instance::find($request->user()->instance_id);

        return $instance->users()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'organization_id' => $validated['organization_id']
        ]);
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
     * @param \App\Http\Requests\ManageUserRequest $request
     * @param \App\Models\User $user
     * @return \App\Models\User
     */
    public function update(ManageUserRequest $request, User $user): User
    {
        $user->update($request->validated());
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
