<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * @group Schedule
 * @authenticated
 */
class ScheduleController extends Controller
{
    /**
     * List today´s reservations
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * List all today's reservations for a specified store
     *
     * @response [
     *   {
     *     "id": 4,
     *     "card_id": 1,
     *     "shop_id": 1,
     *     "time": "2022-08-21T08:00:00.000000Z",
     *     "created_at": "2022-08-19T08:00:00.000000Z",
     *     "updated_at": "2022-08-19T08:00:00.000000Z",
     *     "card": {
     *       "id": 1,
     *       "last_name": "Yasu",
     *       "first_name": "Kitsune",
     *       "street": null,
     *       "postcode": null,
     *       "city": null,
     *       "valid_from": "2022-01-01T00:00:00.000000Z",
     *       "valid_until": "2022-12-31T00:00:00.000000Z",
     *       "creator_id": 1,
     *       "created_at": "2022-08-20T13:16:22.000000Z",
     *       "updated_at": "2022-08-20T13:16:22.000000Z",
     *       "instance_id": 1,
     *       "comment": null
     *     }
     *   }, {
     *     "id": 6,
     *     "card_id": 2,
     *     "shop_id": 1,
     *     "time": "2022-08-21T08:00:00.000000Z",
     *     "created_at": "2022-08-19T08:00:00.000000Z",
     *     "updated_at": "2022-08-19T08:00:00.000000Z",
     *     "card": {
     *       "id": 2,
     *       "last_name": "User",
     *       "first_name": "Test",
     *       "street": null,
     *       "postcode": null,
     *       "city": null,
     *       "valid_from": "2022-01-01T00:00:00.000000Z",
     *       "valid_until": "2022-12-31T00:00:00.000000Z",
     *       "creator_id": 1,
     *       "created_at": "2022-08-20T13:16:22.000000Z",
     *       "updated_at": "2022-08-20T13:16:22.000000Z",
     *       "instance_id": 1,
     *       "comment": null
     *     }
     *   }
     * ]
     *
     * @param Shop $shop
     * @return \Illuminate\Support\Collection
     */
    public function today(Shop $shop): Collection
    {
        return Reservation::with('card')->whereBetween('time', [
            date('Y-m-d') . ' 00:00:00',
            date('Y-m-d') . ' 23:59:59'
        ])->where('shop_id', $shop->id)->get();
    }

    /**
     * List available shops
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * List all shops that are in the same organization as the user
     *
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 1,
     *       "organization_id": 1,
     *       "name": "organization",
     *       "street": "organizations street",
     *       "postcode": "12345",
     *       "city": "organizations city",
     *       "contact": "organizations contact",
     *       "opening_hours": {
     *         "monday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "tuesday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "wednesday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "thursday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "friday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "saturday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "sunday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ]
     *       },
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 2
     *       "organization_id": 3,
     *       "name": "organization",
     *       "street": "organizations street",
     *       "postcode": "12345",
     *       "city": "organizations city",
     *       "contact": "organizations contact",
     *       "opening_hours": {
     *         "monday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "tuesday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "wednesday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "thursday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "friday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "saturday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "sunday": [
     *           {
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ]
     *       },
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
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
     * @param Request $request
     * @return Shop[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function shops(Request $request): \Illuminate\Database\Eloquent\Collection|array
    {
        return Shop::where('organization_id', $request->user()->organization_id)->get();
    }
}
