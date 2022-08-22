<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageCardRequest;
use App\Models\Card;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

/**
 * @group Card
 * @authenticated
 */
class CardManagerController extends Controller
{
    /**
     * List all Cards
     *
     * @response {
     *   "items": [
     *      {
     *       "id": 1,
     *       "last_name": "Mustermann",
     *       "first_name": "Müller",
     *       "street": "Mühlenstraße 5",
     *       "postcode": "12345",
     *       "city": "Würzburg",
     *       "valid_from": "2022-01-01T00:00:00.000000Z",
     *       "valid_until": "2022-03-31T00:00:00.000000Z",
     *       "creator_id": 1,
     *       "created_at": "2022-08-16T15:00:00.000000Z",
     *       "updated_at": "2022-08-16T15:00:00.000000Z"
     *     }, {
     *       "id": 49394739894111,
     *       "last_name": "Kitsune",
     *       "first_name": "Yasu",
     *       "street": "Teststraße 123",
     *       "postcode": "12345",
     *       "city": "Teststadt",
     *       "valid_from": "2022-01-01T00:00:00.000000Z",
     *       "valid_until": "2022-03-31T00:00:00.000000Z",
     *       "creator_id": 1,
     *       "created_at": "2022-08-18T13:47:42.000000Z",
     *       "updated_at": "2022-08-18T13:47:42.000000Z"
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
            // Last name contains
            'last_name' => 'string|nullable',

            // First name contains
            'first_name' => 'string|nullable',

            // Street contains
            'street' => 'string|nullable',

            // Postcode contains
            'postcode' => 'string|nullable',

            // City contains
            'city' => 'string|nullable',

            // Valid from is after this date
            'valid_from.0' => 'date|nullable',

            // Valid from is before this date
            'valid_from.1' => 'date|required_with:valid_from.0',

            // Valid until is after this date
            'valid_until.0' => 'date|nullable',

            // Valid until is before this date
            'valid_until.1' => 'date|required_with:valid_until.0',

            // Created by user_id
            'creator_id' => 'exists:users,id|nullable',

            // Sort by given field
            'sort' => 'string|in:id,last_name,first_name,street,postcode,city,valid_from,valid_until,creator_id|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Card::query(), [
            'last_name' => 'contains',
            'first_name' => 'contains',
            'street' => 'contains',
            'postcode' => 'contains',
            'city' => 'contains',
            'valid_from' => 'range',
            'valid_until' => 'range',
            'creator_id' => 'match'
        ], $filters));
    }

    /**
     * Create new Card
     *
     * @param \App\Http\Requests\ManageCardRequest $request
     * @return \App\Models\Card
     */
    public function store(ManageCardRequest $request): Card
    {
        return Card::create($request->validated());
    }

    /**
     * Show specified Card
     *
     * @response {
     *   "id": 49394739894111,
     *   "last_name": "Kitsune",
     *   "first_name": "Yasu",
     *   "street": "Teststraße 123",
     *   "postcode": "12345",
     *   "city": "Teststadt",
     *   "valid_from": "2022-01-01T00:00:00.000000Z",
     *   "valid_until": "2022-03-31T00:00:00.000000Z",
     *   "creator_id": 1,
     *   "created_at": "2022-08-18T13:47:42.000000Z",
     *   "updated_at": "2022-08-18T13:47:42.000000Z"
     * }
     *
     * @param \App\Models\Card $card
     * @return \App\Models\Card
     */
    public function show(Card $card): Card
    {
        return $card;
    }

    /**
     * Update specified Card
     *
     * @param \App\Http\Requests\ManageCardRequest $request
     * @param \App\Models\Card $card
     * @return \App\Models\Card
     */
    public function update(ManageCardRequest $request, Card $card): Card
    {
        $card->update($request->validated());
        return $card;
    }

    /**
     * Delete specified Card
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\Card $card
     * @return array
     */
    public function destroy(Card $card): array
    {
        return ['success' => $card->delete()];
    }
}
