<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageShopRequest;
use App\Models\Shop;

/**
 * @group Shop
 * @authenticated
 */
class ShopManagerController extends Controller
{
    /**
     * List all Shops
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Shop::all();
    }

    /**
     * Create new Shop
     *
     * @param  \App\Http\Requests\ManageShopRequest  $request
     * @return \App\Models\Shop
     */
    public function store(ManageShopRequest $request)
    {
        return Shop::create($request->validated());
    }

    /**
     * Show specified Shop
     *
     * @param  \App\Models\Shop  $shop
     * @return \App\Models\Shop
     */
    public function show(Shop $shop)
    {
        return $shop;
    }

    /**
     * Update specified Shop
     *
     * @param  \App\Http\Requests\ManageShopRequest  $request
     * @param  \App\Models\Shop  $shop
     * @return \App\Models\Shop
     */
    public function update(ManageShopRequest $request, Shop $shop)
    {
        $shop->update($request->validated());
        return $shop;
    }

    /**
     * Delete specified Shop
     *
     * @param  \App\Models\Shop  $shop
     * @return array
     */
    public function destroy(Shop $shop)
    {
        return ['success' => $shop->delete()];
    }
}
