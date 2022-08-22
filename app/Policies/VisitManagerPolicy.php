<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Visit;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class VisitManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.visit.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Visit $visit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, Visit $visit): Response|bool
    {
        return
            $user->instance_id === $visit->instance_id &&
            $user->hasPermissionTo('admin.visit.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.visit.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Visit $visit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Visit $visit): Response|bool
    {
        return
            $user->instance_id === $visit->instance_id &&
            $user->hasPermissionTo('admin.visit.update') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Visit $visit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Visit $visit): Response|bool
    {
        return
            $user->instance_id === $visit->instance_id &&
            $user->hasPermissionTo('admin.visit.destroy') &&
            $user->tokenCan('admin');
    }
}
