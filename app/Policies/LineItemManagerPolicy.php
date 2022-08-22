<?php

namespace App\Policies;

use App\Models\LineItem;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class LineItemManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.lineItem.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\LineItem $lineItem
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, LineItem $lineItem): Response|bool
    {
        return
            $user->instance_id === $lineItem->instance_id &&
            $user->hasPermissionTo('admin.lineItem.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.lineItem.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\LineItem $lineItem
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, LineItem $lineItem): Response|bool
    {
        return
            $user->instance_id === $lineItem->instance_id &&
            $user->hasPermissionTo('admin.lineItem.update') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\LineItem $lineItem
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, LineItem $lineItem): Response|bool
    {
        return
            $user->instance_id === $lineItem->instance_id &&
            $user->hasPermissionTo('admin.lineItem.destroy') &&
            $user->tokenCan('admin');
    }
}
