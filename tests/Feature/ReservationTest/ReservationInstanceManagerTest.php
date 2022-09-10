<?php

namespace Tests\Feature\ReservationTest;

use App\Models\Reservation;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class ReservationInstanceManagerTest extends ReservationTest
{
    protected function setUp(): void
    {
        parent::setUp();
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
            ->assertJsonStructure([
                "id",
                "card_id",
                "shop_id",
                "time",
                "created_at",
                "updated_at"
            ])
            ->assertSuccessful();
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
            ->assertJsonStructure([
                "items" => [
                    [
                        "id",
                        "card_id",
                        "shop_id",
                        "time",
                        "created_at",
                        "updated_at"
                    ]
                ],
                "meta" => [
                    "current_page",
                    "last_page",
                    "per_page",
                    "item_count"
                ],
                "links" => [
                    "prev_page_url",
                    "next_page_url"
                ]
            ])->assertSuccessful();
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
            ->assertSuccessful();

        assertEquals(2, Reservation::count());
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
            ->assertSuccessful();

        $this->reservation = $this->reservation->refresh();
        assertEquals($payload['time'], $this->reservation->time);
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
            ->assertSuccessful();

        assertFalse(Reservation::exists());
    }
}
