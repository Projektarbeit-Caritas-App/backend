<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            (
                $user->hasPermissionTo('admin.user.index') ||
                $user->hasPermissionTo('admin.user.index.own')
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\User $userModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, User $userModel): Response|bool
    {
        return
            $user->instance_id === $userModel->instance_id &&
            (
                $user->hasPermissionTo('admin.user.show') ||
                (
                    $user->organization_id === $userModel->organization_id &&
                    $user->hasPermissionTo('admin.user.show.own')
                ) ||
                $user->id === $userModel->id
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            (
                $user->hasPermissionTo('admin.user.store') ||
                $user->hasPermissionTo('admin.user.store.own')
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\User $userModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, User $userModel): Response|bool
    {
        return
            $user->instance_id === $userModel->instance_id &&
            (
                $user->hasPermissionTo('admin.user.update') ||
                (
                    $user->organization_id === $userModel->organization_id &&
                    $user->hasPermissionTo('admin.user.update.own')
                ) ||
                $user->id === $userModel->id
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\User $userModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, User $userModel): Response|bool
    {
        return
            $user->instance_id === $userModel->instance_id &&
            (
                $user->hasPermissionTo('admin.user.destroy') ||
                (
                    $user->organization_id === $userModel->organization_id &&
                    $user->hasPermissionTo('admin.user.destroy.own')
                )
            ) &&
            $user->tokenCan('admin');
    }
}
