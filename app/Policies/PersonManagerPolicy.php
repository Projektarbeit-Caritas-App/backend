<?php

namespace App\Policies;

use App\Models\Person;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PersonManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.person.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Person $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, Person $person): Response|bool
    {
        return
            $user->instance_id === $person->instance_id &&
            $user->hasPermissionTo('admin.person.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.person.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Person $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Person $person): Response|bool
    {
        return
            $user->instance_id === $person->instance_id &&
            $user->hasPermissionTo('admin.person.update') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Person $person
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Person $person): Response|bool
    {
        return
            $user->instance_id === $person->instance_id &&
            $user->hasPermissionTo('admin.person.destroy') &&
            $user->tokenCan('admin');
    }
}
