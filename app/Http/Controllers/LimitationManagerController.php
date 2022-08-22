<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLimitationRequest;
use App\Models\Instance;
use App\Models\Limitation;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Limitation
 * @authenticated
 */
class LimitationManagerController extends Controller
{
    /**
     * List all Limitation
     *
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 1,
     *       "product_type_id": 1,
     *       "limitation_set_id": 1,
     *       "limit": 3,
     *       "created_at": "2022-08-16T16:32:23.000000Z",
     *       "updated_at": "2022-08-16T16:32:23.000000Z"
     *     }, {
     *       "id": 3,
     *       "product_type_id": 2,
     *       "limitation_set_id": 2,
     *       "limit": 5,
     *       "created_at": "2022-08-16T16:32:23.000000Z",
     *       "updated_at": "2022-08-16T16:32:23.000000Z"
     *     }, {
     *       "id": 4,
     *       "product_type_id": 2,
     *       "limitation_set_id": 1,
     *       "limit": 5,
     *       "created_at": "2022-08-16T16:32:23.000000Z",
     *       "updated_at": "2022-08-16T16:32:23.000000Z"
     *     }, {
     *       "id": 5,
     *       "product_type_id": 3,
     *       "limitation_set_id": 1,
     *       "limit": 2,
     *       "created_at": "2022-08-16T16:32:23.000000Z",
     *       "updated_at": "2022-08-16T16:32:23.000000Z"
     *     }
     *   ],
     *   "meta": {
     *     "current_page": 1,
     *     "last_page": 1,
     *     "per_page": 25,
     *     "item_count": 4
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
            // Limitation Set
            'limitation_set_id' => 'exists:limitation_sets,id|nullable',

            // Product Type
            'product_type_id' => 'exists:product_types,id|nullable',

            // Sort by given field
            'sort' => 'string|in:id,limitation_set_id,product_type_id,limit|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Limitation::where('instance_id', $request->user()->instance_id), [
            'limitation_set_id' => 'match',
            'product_type_id' => 'match'
        ], $filters));
    }

    /**
     * Create new Limitation
     *
     * @param \App\Http\Requests\ManageLimitationRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageLimitationRequest $request): Model
    {
        $instance = Instance::find($request->user()->instance_id);
        return $instance->limitations()->create($request->validated());
    }

    /**
     * Show specified Limitation
     *
     * @response status=200 {
     *   "id": 1,
     *   "product_type_id": 1,
     *   "limitation_set_id": 1,
     *   "limit": 3,
     *   "created_at": "2022-08-16T16:32:23.000000Z",
     *   "updated_at": "2022-08-16T16:32:23.000000Z"
     * }
     *
     * @param \App\Models\Limitation $limitation
     * @return \App\Models\Limitation
     */
    public function show(Limitation $limitation): Limitation
    {
        return $limitation;
    }

    /**
     * Update specified Limitation
     *
     * @param \App\Http\Requests\ManageLimitationRequest $request
     * @param \App\Models\Limitation $limitation
     * @return \App\Models\Limitation
     */
    public function update(ManageLimitationRequest $request, Limitation $limitation): Limitation
    {
        $limitation->update($request->validated());
        return $limitation;
    }

    /**
     * Delete specified Limitation
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\Limitation $limitation
     * @return array
     */
    public function destroy(Limitation $limitation): array
    {
        return ['success' => $limitation->delete()];
    }
}
