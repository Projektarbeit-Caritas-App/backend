<?php

namespace App\Policies;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ReservationManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function index(User $user): Response|bool
    {
        return
            (
                $user->hasPermissionTo('admin.reservation.index') ||
                $user->hasPermissionTo('admin.reservation.index.own')
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, Reservation $reservation): Response|bool
    {
        return
            $user->instance_id === $reservation->instance_id &&
            (
                $user->hasPermissionTo('admin.reservation.show') ||
                (
                    $user->organization_id === $reservation->shop()->organization_id &&
                    $user->hasPermissionTo('admin.reservation.show.own')
                )
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return
            (
                $user->hasPermissionTo('admin.reservation.store') ||
                $user->hasPermissionTo('admin.reservation.store.own')
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Reservation $reservation): Response|bool
    {
        return
            $user->instance_id === $reservation->instance_id &&
            (
                $user->hasPermissionTo('admin.reservation.update') ||
                (
                    $user->organization_id === $reservation->shop()->organization_id &&
                    $user->hasPermissionTo('admin.reservation.update.own')
                )
            ) &&
            $user->tokenCan('admin');
    }

    /**
     * @param \App\Models\User $user
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Reservation $reservation): Response|bool
    {
        return
            $user->instance_id === $reservation->instance_id &&
            (
                $user->hasPermissionTo('admin.reservation.destroy') ||
                (
                    $user->organization_id === $reservation->shop()->organization_id &&
                    $user->hasPermissionTo('admin.reservation.destroy.own')
                )
            ) &&
            $user->tokenCan('admin');
    }
}
