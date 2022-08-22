<?php

namespace App\Policies;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class OrganizationManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.organization.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Organization $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, Organization $organization): Response|bool
    {
        return
            $user->instance_id === $organization->instance_id &&
            $user->hasPermissionTo('admin.organization.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.organization.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Organization $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Organization $organization): Response|bool
    {
        return
            $user->instance_id === $organization->instance_id &&
            (
                $user->hasPermissionTo('admin.organization.update') ||
                (
                    $user->organization_id === $organization->id &&
                    $user->hasPermissionTo('admin.organization.update.own')
                )
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Organization $organization
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Organization $organization): Response|bool
    {
        return
            $user->instance_id === $organization->instance_id &&
            $user->hasPermissionTo('admin.organization.destroy') &&
            $user->tokenCan('admin');
    }
}
