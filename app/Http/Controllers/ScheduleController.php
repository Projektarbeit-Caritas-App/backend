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
     * @param Shop $shop
     * @return \Illuminate\Support\Collection
     */
    public function today(Shop $shop): Collection
    {
        return Reservation::whereBetween('time',
            [date('Y-m-d') . ' 00:00:00', date('Y-m-d') . ' 23:59:59'])
            ->where('shop_id', $shop->id)->get();
    }

    /**
     * List available shops
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * List all shops that are in the same organization as the user
     *
     * @param Request $request
     * @return Shop[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function shops(Request $request): \Illuminate\Database\Eloquent\Collection|array
    {
        return Shop::where('organization_id', $request->user()->organization_id)->get();
    }
}
