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
     * @response status=200
     * [
     *      {
     *           "id": 6,
     *           "visit_id": 5,
     *           "person_id": 1,
     *           "product_type_id": 1,
     *           "created_at": "2022-08-16T16:32:23.000000Z",
     *           "updated_at": "2022-08-16T16:32:23.000000Z"
     *      },
     *      {
     *           "id": 7,
     *           "visit_id": 6,
     *           "person_id": 1,
     *           "product_type_id": 1,
     *           "created_at": "2022-08-16T16:32:52.000000Z",
     *           "updated_at": "2022-08-16T16:32:52.000000Z"
     *      },
     * ]
     *
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
     * @response status=200
     * {
     *      "id": 6,
     *      "visit_id": 5,
     *      "person_id": 1,
     *      "product_type_id": 1,
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     * }
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
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\LineItem $lineItem
     * @return array
     */
    public function destroy(LineItem $lineItem)
    {
        return ['success' => $lineItem->delete()];
    }
}
