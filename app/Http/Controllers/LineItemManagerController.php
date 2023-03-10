<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLineItemRequest;
use App\Models\Instance;
use App\Models\LineItem;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
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
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 6,
     *       "visit_id": 5,
     *       "person_id": 1,
     *       "product_type_id": 1,
     *       "person": {
     *         "id": 1,
     *         "card_id": 56815898664224,
     *         "gender": "male",
     *         "age": 20,
     *         "created_at": "2022-09-08T13:05:07.000000Z",
     *         "updated_at": "2022-09-08T13:05:07.000000Z",
     *         "instance_id": 1
     *       },
     *       "product_type": {
     *         "id": 1,
     *         "name": "fugiat",
     *         "icon": "quo_icon",
     *         "created_at": "2022-09-08T15:01:01.000000Z",
     *         "updated_at": "2022-09-08T15:01:01.000000Z",
     *         "instance_id": 1
     *       },
     *       "created_at": "2022-08-16T16:32:23.000000Z",
     *       "updated_at": "2022-08-16T16:32:23.000000Z"
     *     }, {
     *       "id": 7,
     *       "visit_id": 6,
     *       "person_id": 1,
     *       "product_type_id": 1,
     *       "person": {
     *         "id": 1,
     *         "card_id": 56815898664224,
     *         "gender": "male",
     *         "age": 20,
     *         "created_at": "2022-09-08T13:05:07.000000Z",
     *         "updated_at": "2022-09-08T13:05:07.000000Z",
     *         "instance_id": 1
     *       },
     *       "product_type": {
     *         "id": 1,
     *         "name": "fugiat",
     *         "icon": "quo_icon",
     *         "created_at": "2022-09-08T15:01:01.000000Z",
     *         "updated_at": "2022-09-08T15:01:01.000000Z",
     *         "instance_id": 1
     *       },
     *       "created_at": "2022-08-16T16:32:52.000000Z",
     *       "updated_at": "2022-08-16T16:32:52.000000Z"
     *     },
     *   ],
     *   "meta": {
     *     "current_page": 1,
     *     "last_page": 1,
     *     "per_page": 25,
     *     "item_count": 6
     *   },
     *   "links": {
     *     "prev_page_url": null,
     *     "next_page_url": null
     *   }
     * }
     *
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
            'page' => 'integer|nullable',

            // Items per page
            'limit' => 'integer|min:10|max:500|nullable'
        ]);

        return ModelFilterService::apiPaginate(
            ModelFilterService::filterEntries(
                LineItem::where('instance_id', $request->user()->instance_id)->with(['person', 'productType']),
                [
                    'visit_id' => 'match',
                    'person_id' => 'match',
                    'product_type_id' => 'match'
                ],
                $filters
            ),
            $filters['limit'] ?? 25
        );
    }

    /**
     * Create new LineItem
     *
     * @param \App\Http\Requests\ManageLineItemRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageLineItemRequest $request): Model
    {
        $instance = Instance::find($request->user()->instance_id);
        return $instance->lineItems()->create($request->validated());
    }

    /**
     * Show specified LineItem
     *
     * @response status=200 {
     *   "id": 6,
     *   "visit_id": 5,
     *   "person_id": 1,
     *   "product_type_id": 1,
     *   "person": {
     *     "id": 1,
     *     "card_id": 56815898664224,
     *     "gender": "male",
     *     "age": 20,
     *     "created_at": "2022-09-08T13:05:07.000000Z",
     *     "updated_at": "2022-09-08T13:05:07.000000Z",
     *     "instance_id": 1
     *   },
     *   "product_type": {
     *     "id": 1,
     *     "name": "fugiat",
     *     "icon": "quo_icon",
     *     "created_at": "2022-09-08T15:01:01.000000Z",
     *     "updated_at": "2022-09-08T15:01:01.000000Z",
     *     "instance_id": 1
     *   },
     *   "created_at": "2022-08-16T16:32:23.000000Z",
     *   "updated_at": "2022-08-16T16:32:23.000000Z"
     * }
     *
     * @param \App\Models\LineItem $lineItem
     * @return \App\Models\LineItem
     */
    public function show(LineItem $lineItem): LineItem
    {
        $lineItem->load(['person', 'productType']);
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
     * @response status=200 {
     *   "success": true
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
