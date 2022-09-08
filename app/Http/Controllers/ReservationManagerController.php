<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageReservationRequest;
use App\Models\Instance;
use App\Models\Reservation;
use App\Models\Shop;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Reservation
 * @authenticated
 */
class ReservationManagerController extends Controller
{
    /**
     * List all Reservations
     *
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 2,
     *       "card_id": 1,
     *       "shop_id": 1,
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
     *       "shop": {
     *         "id": 1,
     *         "organization_id": 1,
     *         "name": "organization",
     *         "street": "organizations street",
     *         "postcode": "12345",
     *         "city": "organizations city",
     *         "contact": "organizations contact",
     *         "opening_hours": {
     *           "monday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "tuesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "wednesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "thursday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "friday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "saturday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "sunday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ]
     *         },
     *         "created_at": "2022-08-18T13:48:25.000000Z",
     *         "updated_at": "2022-08-18T13:48:25.000000Z"
     *       },
     *       "time": "2022-08-20T16:30:00.000000Z",
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 3,
     *       "card_id": 1,
     *       "shop_id": 1,
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
     *       "shop": {
     *         "id": 1,
     *         "organization_id": 1,
     *         "name": "organization",
     *         "street": "organizations street",
     *         "postcode": "12345",
     *         "city": "organizations city",
     *         "contact": "organizations contact",
     *         "opening_hours": {
     *           "monday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "tuesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "wednesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "thursday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "friday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "saturday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "sunday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ]
     *         },
     *         "created_at": "2022-08-18T13:48:25.000000Z",
     *         "updated_at": "2022-08-18T13:48:25.000000Z"
     *       },
     *       "time": "2022-08-20T08:00:00.000000Z",
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 4,
     *       "card_id": 1,
     *       "shop_id": 1,
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
     *       "shop": {
     *         "id": 1,
     *         "organization_id": 1,
     *         "name": "organization",
     *         "street": "organizations street",
     *         "postcode": "12345",
     *         "city": "organizations city",
     *         "contact": "organizations contact",
     *         "opening_hours": {
     *           "monday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "tuesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "wednesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "thursday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "friday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "saturday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "sunday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ]
     *         },
     *         "created_at": "2022-08-18T13:48:25.000000Z",
     *         "updated_at": "2022-08-18T13:48:25.000000Z"
     *       },
     *       "time": "2022-08-21T08:00:00.000000Z",
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 5,
     *       "card_id": 49394739894111,
     *       "shop_id": 2,
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
     *       "shop": {
     *         "id": 2,
     *         "organization_id": 1,
     *         "name": "organization",
     *         "street": "organizations street",
     *         "postcode": "12345",
     *         "city": "organizations city",
     *         "contact": "organizations contact",
     *         "opening_hours": {
     *           "monday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "tuesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "wednesday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "thursday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "friday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "saturday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ],
     *           "sunday": [
     *             {
     *               "opens_at": "08:00",
     *               "closes_at": "17:00"
     *             }
     *           ]
     *         },
     *         "created_at": "2022-08-18T13:48:25.000000Z",
     *         "updated_at": "2022-08-18T13:48:25.000000Z"
     *       },
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
     * @param \Illuminate\Http\Request $request
     * @return array
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
            'page' => 'integer|nullable',

            // Items per page
            'limit' => 'integer|min:10|max:500|nullable'
        ]);

        $query = Reservation::where('instance_id', $request->user()->instance_id)->with(['card', 'shop']);

        if (!$request->user()->hasPermissionTo('admin.reservation.index')) {
            $query->whereRelation('shop', 'organization_id', $request->user()->organization_id);
        }

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries($query, [
            'card_id' => 'match',
            'shop_id' => 'match',
            'time' => 'range'
        ], $filters), $filters['limit'] ?? 25);
    }

    /**
     * Create new Reservation
     *
     * @param \App\Http\Requests\ManageReservationRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageReservationRequest $request): Model
    {
        $validated = $request->validated();
        $instance = Instance::find($request->user()->instance_id);

        if (!$request->user()->hasPermissionTo('admin.reservation.store')) {
            $shop = Shop::find($validated['shop_id']);

            if ($shop === null || $shop->organization_id !== $request->user()->organization_id) {
                abort(403);
            }
        }

        return $instance->reservations()->create($validated);
    }

    /**
     * Show specified Reservation
     *
     * @response status=200 {
     *   "id": 2,
     *   "card_id": 49394739894111,
     *   "shop_id": 1,
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
     *   "shop": {
     *     "id": 1,
     *     "organization_id": 1,
     *     "name": "organization",
     *     "street": "organizations street",
     *     "postcode": "12345",
     *     "city": "organizations city",
     *     "contact": "organizations contact",
     *     "opening_hours": {
     *       "monday": [
     *         {
     *           "opens_at": "08:00",
     *           "closes_at": "17:00"
     *         }
     *       ],
     *       "tuesday": [
     *         {
     *           "opens_at": "08:00",
     *           "closes_at": "17:00"
     *         }
     *       ],
     *       "wednesday": [
     *         {
     *           "opens_at": "08:00",
     *           "closes_at": "17:00"
     *         }
     *       ],
     *       "thursday": [
     *         {
     *           "opens_at": "08:00",
     *           "closes_at": "17:00"
     *         }
     *       ],
     *       "friday": [
     *         {
     *           "opens_at": "08:00",
     *           "closes_at": "17:00"
     *         }
     *       ],
     *       "saturday": [
     *         {
     *           "opens_at": "08:00",
     *           "closes_at": "17:00"
     *         }
     *       ],
     *       "sunday": [
     *         {
     *           "opens_at": "08:00",
     *           "closes_at": "17:00"
     *         }
     *       ]
     *     },
     *     "created_at": "2022-08-18T13:48:25.000000Z",
     *     "updated_at": "2022-08-18T13:48:25.000000Z"
     *   },
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
        $reservation->load(['card', 'shop']);
        return $reservation;
    }

    /**
     * Update specified Reservation
     *
     * @param \App\Http\Requests\ManageReservationRequest $request
     * @param \App\Models\Reservation $reservation
     * @return \App\Models\Reservation
     */
    public function update(ManageReservationRequest $request, Reservation $reservation): Reservation
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
