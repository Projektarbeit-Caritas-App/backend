<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLineItemRequest;
use App\Models\LineItem;

/**
 * @group Line Item
 * @authenticated
 */
class LineItemManagerController extends Controller
{
    /**
     * List all LineItems
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return LineItem::all();
    }

    /**
     * Create new LineItem
     *
     * @param \App\Http\Requests\ManageLineItemRequest $request
     * @return \App\Models\LineItem
     */
    public function store(ManageLineItemRequest $request)
    {
        return LineItem::create($request->validated());
    }

    /**
     * Show specified LineItem
     *
     * @param \App\Models\LineItem $lineItem
     * @return \App\Models\LineItem
     */
    public function show(LineItem $lineItem)
    {
        return $lineItem;
    }


    /**
     * Update specified LineItem
     *
     * @param \App\Http\Requests\ManageLineItemRequest $request
     * @param \App\Models\LineItem $lineItem
     * @return \App\Models\LineItem
     */
    public function update(ManageLineItemRequest $request, LineItem $lineItem)
    {
        $lineItem->update($request->validated());
        return $lineItem;
    }

    /**
     * Delete specified LineItem
     *
     * @param \App\Models\LineItem $lineItem
     * @return array
     */
    public function destroy(LineItem $lineItem)
    {
        return ['success' => $lineItem->delete()];
    }
}
