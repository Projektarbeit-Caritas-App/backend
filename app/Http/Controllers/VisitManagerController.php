<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageVisitRequest;
use App\Models\Instance;
use App\Models\Visit;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Visit
 * @authenticated
 */
class VisitManagerController extends Controller
{
    /**
     * List all Visits
     *
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 6,
     *       "card_id": 1,
     *       "user_id": 1,
     *       "card": {
     *         "id": 49394739894111,
     *         "last_name": "Kitsune",
     *         "first_name": "Yasu",
     *         "street": "Teststraße 123",
     *         "postcode": "12345",
     *         "city": "Teststadt",
     *         "valid_from": "2022-01-01T00:00:00.000000Z",
     *         "valid_until": "2022-03-31T00:00:00.000000Z",
     *         "creator_id": 1,
     *         "comment": null,
     *         "created_at": "2022-08-18T13:47:42.000000Z",
     *         "updated_at": "2022-08-18T13:47:42.000000Z"
     *       },
     *       "created_at": "2022-08-16T16:32:52.000000Z",
     *       "updated_at": "2022-08-16T16:32:52.000000Z"
     *     }, {
     *       "id": 7,
     *       "card_id": 49394739894111,
     *       "user_id": 1,
     *       "card": {
     *         "id": 49394739894111,
     *         "last_name": "Kitsune",
     *         "first_name": "Yasu",
     *         "street": "Teststraße 123",
     *         "postcode": "12345",
     *         "city": "Teststadt",
     *         "valid_from": "2022-01-01T00:00:00.000000Z",
     *         "valid_until": "2022-03-31T00:00:00.000000Z",
     *         "creator_id": 1,
     *         "comment": null,
     *         "created_at": "2022-08-18T13:47:42.000000Z",
     *         "updated_at": "2022-08-18T13:47:42.000000Z"
     *       },
     *       "created_at": "2022-08-17T13:52:35.000000Z",
     *       "updated_at": "2022-08-17T13:52:35.000000Z"
     *     }, {
     *       "id": 8,
     *       "card_id": 49394739894111,
     *       "user_id": 3,
     *       "card": {
     *         "id": 49394739894111,
     *         "last_name": "Kitsune",
     *         "first_name": "Yasu",
     *         "street": "Teststraße 123",
     *         "postcode": "12345",
     *         "city": "Teststadt",
     *         "valid_from": "2022-01-01T00:00:00.000000Z",
     *         "valid_until": "2022-03-31T00:00:00.000000Z",
     *         "creator_id": 1,
     *         "comment": null,
     *         "created_at": "2022-08-18T13:47:42.000000Z",
     *         "updated_at": "2022-08-18T13:47:42.000000Z"
     *       },
     *       "created_at": "2022-08-21T11:50:35.000000Z",
     *       "updated_at": "2022-08-21T11:50:35.000000Z"
     *     }
     *   ],
     *   "meta": {
     *     "current_page": 1,
     *     "last_page": 1,
     *     "per_page": 25,
     *     "item_count": 2
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
            // Card
            'card_id' => 'exists:cards,id|nullable',

            // User
            'user_id' => 'exists:users,id|nullable',

            // Sort by given field
            'sort' => 'string|in:id,card_id,user_id|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable',

            // Items per page
            'limit' => 'integer|min:10|max:500|nullable'
        ]);

        return ModelFilterService::apiPaginate(
            ModelFilterService::filterEntries(
                Visit::where('instance_id', $request->user()->instance_id)->with('card'),
                [
                    'card_id' => 'match',
                    'user_id' => 'match'
                ],
                $filters
            ),
            $filters['limit'] ?? 25
        );
    }

    /**
     * Create new Visit
     *
     * @param \App\Http\Requests\ManageVisitRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageVisitRequest $request): Model
    {
        $instance = Instance::find($request->user()->instance_id);
        return $instance->visits()->create($request->validated());
    }

    /**
     * Show specified Visit
     *
     * @response status=200 {
     *   "id": 6,
     *   "card_id": 49394739894111,
     *   "user_id": 1,
     *   "card": {
     *     "id": 49394739894111,
     *     "last_name": "Kitsune",
     *     "first_name": "Yasu",
     *     "street": "Teststraße 123",
     *     "postcode": "12345",
     *     "city": "Teststadt",
     *     "valid_from": "2022-01-01T00:00:00.000000Z",
     *     "valid_until": "2022-03-31T00:00:00.000000Z",
     *     "creator_id": 1,
     *     "comment": null,
     *     "created_at": "2022-08-18T13:47:42.000000Z",
     *     "updated_at": "2022-08-18T13:47:42.000000Z"
     *   },
     *   "created_at": "2022-08-16T16:32:52.000000Z",
     *   "updated_at": "2022-08-16T16:32:52.000000Z"
     * }
     *
     * @param \App\Models\Visit $visit
     * @return \App\Models\Visit
     */
    public function show(Visit $visit): Visit
    {
        $visit->load('card');
        return $visit;
    }

    /**
     * Update specified Visit
     *
     * @param \App\Http\Requests\ManageVisitRequest $request
     * @param \App\Models\Visit $visit
     * @return \App\Models\Visit
     */
    public function update(ManageVisitRequest $request, Visit $visit): Visit
    {
        $visit->update($request->validated());
        return $visit;
    }

    /**
     * Delete specified Visit
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\Visit $visit
     * @return array
     */
    public function destroy(Visit $visit): array
    {
        return ['success' => $visit->delete()];
    }
}
