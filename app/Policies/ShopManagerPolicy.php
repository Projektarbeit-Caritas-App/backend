<?php

namespace App\Policies;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ShopManagerPolicy
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
                $user->hasPermissionTo('admin.shop.index') ||
                $user->hasPermissionTo('admin.shop.index.own')
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Shop $shop
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, Shop $shop): Response|bool
    {
        return
            $user->instance_id === $shop->instance_id &&
            (
                $user->hasPermissionTo('admin.shop.show') ||
                (
                    $user->organization_id === $shop->organization_id &&
                    $user->hasPermissionTo('admin.shop.show.own')
                )
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
                $user->hasPermissionTo('admin.shop.store') ||
                $user->hasPermissionTo('admin.shop.store.own')
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Shop $shop
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Shop $shop): Response|bool
    {
        return
            $user->instance_id === $shop->instance_id &&
            (
                $user->hasPermissionTo('admin.shop.update') ||
                (
                    $user->organization_id === $shop->organization_id &&
                    $user->hasPermissionTo('admin.shop.update.own')
                )
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Shop $shop
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Shop $shop): Response|bool
    {
        return
            $user->instance_id === $shop->instance_id &&
            (
                $user->hasPermissionTo('admin.shop.destroy') ||
                (
                    $user->organization_id === $shop->organization_id &&
                    $user->hasPermissionTo('admin.shop.destroy.own')
                )
            ) &&
            $user->tokenCan('admin');
    }
}
