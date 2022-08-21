<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLineItemRequest;
use App\Models\LineItem;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

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
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Visit
            'visit_id' => 'exists:visits,id|nullable',

            // Person
            'person_id' => 'exists:people,id|nullable',

            // Product Type
            'product_type_id' => 'exists:product_types,id|nullable',

            // Sort by given field
            'sort' => 'string|in:id,visit_id,person_id,product_type_id|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(LineItem::query(), [
            'visit_id' => 'match',
            'person_id' => 'match',
            'product_type_id' => 'match'
        ], $filters));
    }

    /**
     * Create new LineItem
     *
     * @param \App\Http\Requests\ManageLineItemRequest $request
     * @return \App\Models\LineItem
     */
    public function store(ManageLineItemRequest $request): LineItem
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
    public function show(LineItem $lineItem): LineItem
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
    public function update(ManageLineItemRequest $request, LineItem $lineItem): LineItem
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
    public function destroy(LineItem $lineItem): array
    {
        return ['success' => $lineItem->delete()];
    }
}
