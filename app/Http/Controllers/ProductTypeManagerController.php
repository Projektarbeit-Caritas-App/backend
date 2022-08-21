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
     * @response status=200
     * [
     *  {
     *      "id": 1,
     *      "name": "t-shirt",
     *      "icon": "t-shirt icon",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": 2,
     *      "name": "shoe",
     *      "icon": "shoe icon",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": 3,
     *      "name": "sock",
     *      "icon": "sock icon",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
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
     * @param \App\Http\Requests\ManageProductTypeRequest $request
     * @return \App\Models\ProductType
     */
    public function store(ManageProductTypeRequest $request): ProductType
    {
        return ProductType::create($request->validated());
    }

    /**
     * Show specified ProductType
     *
     * @response status=200
     * {
     *      "id": 1,
     *      "name": "t-shirt",
     *      "icon": "t-shirt icon",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     * }
     *
     * @param \App\Models\ProductType $productType
     * @return \App\Models\ProductType
     */
    public function show(ProductType $productType): ProductType
    {
        return $productType;
    }

    /**
     * Update specified ProductType
     *
     * @param \App\Http\Requests\ManageProductTypeRequest $request
     * @param \App\Models\ProductType $productType
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
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\ProductType $productType
     * @return array
     */
    public function destroy(ProductType $productType): array
    {
        return ['success' => $productType->delete()];
    }
}
