<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageUserRequest;
use App\Models\User;

/**
 * @group User
 * @authenticated
 */
class UserManagerController extends Controller
{
    /**
     * List all Users
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Create new User
     *
     * @param \App\Http\Requests\ManageUserRequest $request
     * @return \App\Models\User
     */
    public function store(ManageUserRequest $request)
    {
        return User::create($request->validated());
    }

    /**
     * Show specified User
     *
     * @param  \App\Models\User  $user
     * @return \App\Models\User
     */
    public function show(User $user)
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
    public function update(ManageUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return $user;
    }

    /**
     * Delete specified User
     *
     * @param  \App\Models\User  $user
     * @return array
     */
    public function destroy(User $user)
    {
        return ['success' => $user->delete()];
    }


}
