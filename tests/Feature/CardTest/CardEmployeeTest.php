<?php

namespace Tests\Feature\CardTest;

use App\Models\Card;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotEquals;

class CardEmployeeTest extends CardTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->user->syncRoles('employee');
    }

    /**
     * Test positive behavior of show card
     *
     * @return void
     */
    public function test_show_card()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/card/' . $this->card->id)
            ->assertForbidden();
    }

    /**
     * Test positive behavior of index card
     *
     * @return void
     */
    public function test_index_card()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/card/')
            ->assertForbidden();
    }

    /**
     * Test positive behavior of create card
     *
     * @return void
     */
    public function test_create_card()
    {
        $payload = [
            "last_name" => "Kitsune",
            "first_name" => "Yasu",
            "street" => "Foxstreet 10",
            "postcode" => "12345",
            "city" => "Foxhole",
            "valid_from" => "2022-08-04 12:00:00",
            "valid_until" => "2022-08-04 12:00:00"
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/card/', $payload)
            ->assertForbidden();

        assertEquals(1, Card::count());
    }

    /**
     * Test positive behavior of update card
     *
     * @return void
     */
    public function test_update_card()
    {
        $payload = [
            "last_name" => "Kitsune Updated",
            "first_name" => "Yasu Updated",
            "street" => "Foxstreet 10 Updated",
            "postcode" => "12345 Updated",
            "city" => "Foxhole Updated",
            "valid_from" => "2022-08-05 12:00:00",
            "valid_until" => "2022-08-05 12:00:00"
        ];

        assertNotEquals($payload['last_name'], $this->card->last_name);
        assertNotEquals($payload['first_name'], $this->card->first_name);
        assertNotEquals($payload['street'], $this->card->street);
        assertNotEquals($payload['postcode'], $this->card->postcode);
        assertNotEquals($payload['city'], $this->card->city);
        assertNotEquals($payload['valid_from'], $this->card->valid_from);
        assertNotEquals($payload['valid_until'], $this->card->valid_until);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/card/' . $this->card->id, $payload)
            ->assertForbidden();

        $this->card = $this->card->refresh();
        assertNotEquals($payload['last_name'], $this->card->last_name);
        assertNotEquals($payload['first_name'], $this->card->first_name);
        assertNotEquals($payload['street'], $this->card->street);
        assertNotEquals($payload['postcode'], $this->card->postcode);
        assertNotEquals($payload['city'], $this->card->city);
        assertNotEquals($payload['valid_from'], $this->card->valid_from);
        assertNotEquals($payload['valid_until'], $this->card->valid_until);
    }

    /**
     * Test positive behavior of delete card
     *
     * @return void
     */
    public function test_delete_card()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/card/' . $this->card->id)
            ->assertForbidden();

        $this->assertModelExists($this->card);
    }
}
