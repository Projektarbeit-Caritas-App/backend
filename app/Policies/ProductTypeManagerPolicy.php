<?php

namespace App\Policies;

use App\Models\ProductType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ProductTypeManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.product-type.index') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\ProductType $productType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, ProductType $productType): Response|bool
    {
        return
            $user->instance_id === $productType->instance_id &&
            $user->hasPermissionTo('admin.product-type.show') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            $user->hasPermissionTo('admin.product-type.store') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\ProductType $productType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProductType $productType): Response|bool
    {
        return
            $user->instance_id === $productType->instance_id &&
            $user->hasPermissionTo('admin.product-type.update') &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\ProductType $productType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProductType $productType): Response|bool
    {
        return
            $user->instance_id === $productType->instance_id &&
            $user->hasPermissionTo('admin.product-type.destroy') &&
            $user->tokenCan('admin');
    }
}
