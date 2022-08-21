<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageProductTypeRequest;
use App\Models\ProductType;

/**
 * @group Product Type
 * @authenticated
 */
class ProductTypeManagerController extends Controller
{
    /**
     * List all ProductTypes
     *
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
    public function index()
    {
        return ProductType::all();
    }

    /**
     * Create new ProductType
     *
     * @param \App\Http\Requests\ManageProductTypeRequest $request
     * @return \App\Models\ProductType
     */
    public function store(ManageProductTypeRequest $request)
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
    public function show(ProductType $productType)
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
    public function update(ManageProductTypeRequest $request, ProductType $productType)
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
    public function destroy(ProductType $productType)
    {
        return ['success' => $productType->delete()];
    }
}
