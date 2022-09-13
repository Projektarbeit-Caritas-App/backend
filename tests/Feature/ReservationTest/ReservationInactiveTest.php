<?php

namespace Tests\Feature\ReservationTest;

use App\Models\Reservation;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotEquals;
use function PHPUnit\Framework\assertTrue;

class ReservationInactiveTest extends ReservationTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->user->syncRoles('inactive');
    }

    /**
     * Test positive behavior of show reservation
     *
     * @return void
     */
    public function test_show_reservation()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/reservation/' . $this->reservation->id)
            ->assertForbidden();
    }

    /**
     * Test positive behavior of index reservation
     *
     * @return void
     */
    public function test_index_reservation()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/reservation/')
            ->assertForbidden();
    }

    /**
     * Test positive behavior of create reservation
     *
     * @return void
     */
    public function test_create_reservation()
    {
        $payload = [
            'card_id' => $this->card->id,
            'shop_id' => $this->shop->id,
            'time' => "2022-08-04 12:00:00"
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/reservation/', $payload)
            ->assertForbidden();

        assertEquals(1, Reservation::count());
    }

    /**
     * Test positive behavior of update reservation
     *
     * @return void
     */
    public function test_update_reservation()
    {
        $payload = [
            'card_id' => $this->card->id,
            'shop_id' => $this->shop->id,
            'time' => "2022-08-08 12:00:00"
        ];

        assertNotEquals($payload['time'], $this->reservation->time);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/reservation/' . $this->reservation->id, $payload)
            ->assertForbidden();

        $this->reservation = $this->reservation->refresh();
        assertNotEquals($payload['time'], $this->reservation->time);
    }

    /**
     * Test positive behavior of delete reservation
     *
     * @return void
     */
    public function test_delete_reservation()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/reservation/' . $this->reservation->id)
            ->assertForbidden();

        assertTrue(Reservation::exists());
    }
}
