<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageProductTypeRequest;
use App\Models\ProductType;

/**
 * @group ProductType
 * @authenticated
 */
class ProductTypeManagerController extends Controller
{
    /**
     * List all ProductTypes
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
     * @param  \App\Http\Requests\ManageProductTypeRequest  $request
     * @return \App\Models\ProductType
     */
    public function store(ManageProductTypeRequest $request)
    {
        return ProductType::create($request->validated());
    }

    /**
     * Show specified ProductType
     *
     * @param  \App\Models\ProductType  $productType
     * @return \App\Models\ProductType
     */
    public function show(ProductType $productType)
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
    public function update(ManageProductTypeRequest $request, ProductType $productType)
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
    public function destroy(ProductType $productType)
    {
        return ['success' => $productType->delete()];
    }
}
