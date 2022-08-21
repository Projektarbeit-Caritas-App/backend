<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;

/**
 * @group Reservation
 * @authenticated
 */
class ReservationController extends Controller
{
    /**
     * List all Reservations
     *
     * @response status=200
     * [
     *  {
     *      "id": 2,
     *      "card_id": 1,
     *      "shop_id": 1,
     *      "time": "2022-08-20T16:30:00.000000Z",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": 3,
     *      "card_id": 1,
     *      "shop_id": 1,
     *      "time": "2022-08-20T08:00:00.000000Z",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": 4,
     *      "card_id": 1,
     *      "shop_id": 1,
     *      "time": "2022-08-21T08:00:00.000000Z",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": 5,
     *      "card_id": 1,
     *      "shop_id": 2,
     *      "time": "2022-08-21T15:00:00.000000Z",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Reservation::all();
    }

    /**
     * Create new Reservation
     *
     * @param \App\Http\Requests\ReservationRequest $request
     * @return \App\Models\Reservation
     */
    public function store(ReservationRequest $request)
    {
        return Reservation::create($request->validated());
    }

    /**
     * Show specified Reservation
     *
     * @response status=200
     * {
     *      "id": 2,
     *      "card_id": 1,
     *      "shop_id": 1,
     *      "time": "2022-08-20T16:30:00.000000Z",
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     * }
     *
     * @param \App\Models\Reservation $reservation
     * @return \App\Models\Reservation
     */
    public function show(Reservation $reservation)
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
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->update($request->validated());
        return $reservation;
    }

    /**
     * Delete specified Reservation
     *
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\Reservation $reservation
     * @return array
     */
    public function destroy(Reservation $reservation)
    {
        return ['success' => $reservation->delete()];
    }
}
