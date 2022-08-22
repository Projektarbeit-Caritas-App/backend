<?php

namespace App\Policies;

use App\Models\Limitation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class LimitationManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.limitation.limit.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Limitation $limitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, Limitation $limitation): Response|bool
    {
        return
            $user->instance_id === $limitation->instance_id &&
            $user->hasPermissionTo('admin.limitation.limit.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.limitation.limit.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Limitation $limitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Limitation $limitation): Response|bool
    {
        return
            $user->instance_id === $limitation->instance_id &&
            $user->hasPermissionTo('admin.limitation.limit.update') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Limitation $limitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Limitation $limitation): Response|bool
    {
        return
            $user->instance_id === $limitation->instance_id &&
            $user->hasPermissionTo('admin.limitation.limit.destroy') &&
            $user->tokenCan('admin');
    }
}
