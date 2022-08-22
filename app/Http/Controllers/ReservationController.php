<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

/**
 * @group Reservation
 * @authenticated
 */
class ReservationController extends Controller
{
    /**
     * List all Reservations
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 2,
     *       "card_id": 1,
     *       "shop_id": 1,
     *       "time": "2022-08-20T16:30:00.000000Z",
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 3,
     *       "card_id": 1,
     *       "shop_id": 1,
     *       "time": "2022-08-20T08:00:00.000000Z",
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 4,
     *       "card_id": 1,
     *       "shop_id": 1,
     *       "time": "2022-08-21T08:00:00.000000Z",
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 5,
     *       "card_id": 1,
     *       "shop_id": 2,
     *       "time": "2022-08-21T15:00:00.000000Z",
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
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
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Card
            'card_id' => 'exists:cards,id|nullable',

            // Shop
            'shop_id' => 'exists:shops,id|nullable',

            // Time is after this date
            'time.0' => 'date|nullable',

            // Time is before this date
            'time.1' => 'date|required_with:time.0',

            // Sort by given field
            'sort' => 'string|in:id,card_id,shop_id,time|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Reservation::query(), [
            'card_id' => 'match',
            'shop_id' => 'match',
            'time' => 'range'
        ], $filters));
    }

    /**
     * Create new Reservation
     *
     * @param \App\Http\Requests\ReservationRequest $request
     * @return \App\Models\Reservation
     */
    public function store(ReservationRequest $request): Reservation
    {
        return Reservation::create($request->validated());
    }

    /**
     * Show specified Reservation
     *
     * @response status=200 {
     *   "id": 2,
     *   "card_id": 1,
     *   "shop_id": 1,
     *   "time": "2022-08-20T16:30:00.000000Z",
     *   "created_at": "2022-08-18T13:48:25.000000Z",
     *   "updated_at": "2022-08-18T13:48:25.000000Z"
     * }
     *
     * @param \App\Models\Reservation $reservation
     * @return \App\Models\Reservation
     */
    public function show(Reservation $reservation): Reservation
    {
        return $reservation;
    }

    /**
     * Update specified Reservation
     *
     * @param \App\Http\Requests\ReservationRequest $request
     * @param \App\Models\Reservation $reservation
     * @return \App\Models\Reservation
     */
    public function update(ReservationRequest $request, Reservation $reservation): Reservation
    {
        $reservation->update($request->validated());
        return $reservation;
    }

    /**
     * Delete specified Reservation
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\Reservation $reservation
     * @return array
     */
    public function destroy(Reservation $reservation): array
    {
        return ['success' => $reservation->delete()];
    }
}
