<?php

namespace App\Policies;

use App\Models\LimitationSet;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class LimitationSetManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.limitation.set.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\LimitationSet $limitationSet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, LimitationSet $limitationSet): Response|bool
    {
        return
            $user->instance_id === $limitationSet->instance_id &&
            $user->hasPermissionTo('admin.limitation.set.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.limitation.set.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\LimitationSet $limitationSet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, LimitationSet $limitationSet): Response|bool
    {
        return
            $user->instance_id === $limitationSet->instance_id &&
            $user->hasPermissionTo('admin.limitation.set.update') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\LimitationSet $limitationSet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, LimitationSet $limitationSet): Response|bool
    {
        return
            $user->instance_id === $limitationSet->instance_id &&
            $user->hasPermissionTo('admin.limitation.set.destroy') &&
            $user->tokenCan('admin');
    }
}
