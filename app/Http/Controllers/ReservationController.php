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
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Reservation::all();
    }

    /**
     * Create new Reservation
     *
     * @param  \App\Http\Requests\ReservationRequest  $request
     * @return \App\Models\Reservation
     */
    public function store(ReservationRequest $request)
    {
        return Reservation::create($request->validated());
    }

    /**
     * Show specified Reservation
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \App\Models\Reservation
     */
    public function show(Reservation $reservation)
    {
        return $reservation;
    }

    /**
     * Update specified Reservation
     *
     * @param  \App\Http\Requests\ReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
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
     * @param  \App\Models\Reservation  $reservation
     * @return array
     */
    public function destroy(Reservation $reservation)
    {
        return ['success' => $reservation->delete()];
    }
}
