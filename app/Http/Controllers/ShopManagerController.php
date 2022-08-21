<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageShopRequest;
use App\Models\Instance;
use App\Models\Shop;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Shop
 * @authenticated
 */
class ShopManagerController extends Controller
{
    /**
     * List all Shops
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Organization
            'organization_id' => 'exists:organizations,id|nullable',

            // Name contains
            'name' => 'string|nullable',

            // Street contains
            'street' => 'string|nullable',

            // Postcode contains
            'postcode' => 'string|nullable',

            // City contains
            'city' => 'string|nullable',

            // Contact contains
            'contact' => 'string|nullable',

            // Sort by given field
            'sort' => 'string|in:id,organization_id,name,street,postcode,city,contact|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Shop::where('instance_id', $request->user()->instance_id), [
            'organization_id' => 'match',
            'name' => 'contains',
            'street' => 'contains',
            'postcode' => 'contains',
            'city' => 'contains',
            'contact' => 'contains'
        ], $filters));
    }

    /**
     * Create new Shop
     *
     * @param  \App\Http\Requests\ManageShopRequest  $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageShopRequest $request): Model
    {
        $instance = Instance::find($request->user()->instance_id);
        return $instance->shops()->create($request->validated());
    }

    /**
     * Show specified Shop
     *
     * @param  \App\Models\Shop  $shop
     * @return \App\Models\Shop
     */
    public function show(Shop $shop): Shop
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
    public function update(ManageShopRequest $request, Shop $shop): Shop
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
    public function destroy(Shop $shop): array
    {
        return ['success' => $shop->delete()];
    }
}
