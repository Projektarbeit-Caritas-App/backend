<?php

namespace App\Policies;

use App\Models\Card;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CardManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.card.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Card $card
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, Card $card): Response|bool
    {
        return
            $user->instance_id === $card->instance_id &&
            $user->hasPermissionTo('admin.card.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.card.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Card $card
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Card $card): Response|bool
    {
        return
            $user->instance_id === $card->instance_id &&
            $user->hasPermissionTo('admin.card.update') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Card $card
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Card $card): Response|bool
    {
        return
            $user->instance_id === $card->instance_id &&
            $user->hasPermissionTo('admin.card.destroy') &&
            $user->tokenCan('admin');
    }
}
