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
