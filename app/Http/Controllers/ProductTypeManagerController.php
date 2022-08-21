<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageProductTypeRequest;
use App\Models\ProductType;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

/**
 * @group Product Type
 * @authenticated
 */
class ProductTypeManagerController extends Controller
{
    /**
     * List all ProductTypes
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Name contains
            'name' => 'string|nullable',

            // Icon contains
            'icon' => 'string|nullable',

            // Sort by given field
            'sort' => 'string|in:id,name,icon|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(ProductType::query(), [
            'name' => 'contains',
            'icon' => 'contains'
        ], $filters));
    }

    /**
     * Create new ProductType
     *
     * @param  \App\Http\Requests\ManageProductTypeRequest  $request
     * @return \App\Models\ProductType
     */
    public function store(ManageProductTypeRequest $request): ProductType
    {
        return ProductType::create($request->validated());
    }

    /**
     * Show specified ProductType
     *
     * @param  \App\Models\ProductType  $productType
     * @return \App\Models\ProductType
     */
    public function show(ProductType $productType): ProductType
    {
        return $productType;
    }

    /**
     * Update specified ProductType
     *
     * @param  \App\Http\Requests\ManageProductTypeRequest  $request
     * @param  \App\Models\ProductType  $productType
     * @return \App\Models\ProductType
     */
    public function update(ManageProductTypeRequest $request, ProductType $productType): ProductType
    {
        $productType->update($request->validated());
        return $productType;
    }

    /**
     * Delete specified ProductType
     *
     * @param  \App\Models\ProductType  $productType
     * @return array
     */
    public function destroy(ProductType $productType): array
    {
        return ['success' => $productType->delete()];
    }
}
