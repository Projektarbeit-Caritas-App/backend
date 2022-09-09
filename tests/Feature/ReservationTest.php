<?php

namespace Tests\Feature;

use App\Models\Card;
use App\Models\Instance;
use App\Models\Organization;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class ReservationTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $shop;
    private $card;
    private $reservation;

    protected function setUp(): void
    {
        parent::setUp();

        $this->instance           = new Instance;
        $this->instance->name     = "Instance Name";
        $this->instance->street   = "Instance Street";
        $this->instance->postcode = "12345";
        $this->instance->city     = "Instance city";
        $this->instance->contact  = "Instance contact";
        $this->instance->save();

        $this->organization           = new Organization;
        $this->organization->name     = "Organization Name";
        $this->organization->street   = "Organization Street";
        $this->organization->postcode = "12345";
        $this->organization->city     = "Organization City";
        $this->organization->contact  = "Organization Contact";
        $this->instance->organizations()->save($this->organization);

        $this->user           = new User;
        $this->user->name     = "Test User Name";
        $this->user->email    = "test@web.de";
        $this->user->password = Hash::make("Test User Password");
        $this->user->syncRoles("instance_manager");
        $this->user->instance_id = $this->instance->id;
        $this->organization->users()->save($this->user);

        $this->shop                  = new Shop();
        $this->shop->organization_id = $this->organization->id;
        $this->shop->instance_id     = $this->instance->id;
        $this->shop->name            = "Shop name";
        $this->shop->street          = "Shop street";
        $this->shop->postcode        = "Shop postcode";
        $this->shop->city            = "Shop city";
        $this->shop->contact         = "Shop contact";
        $this->shop->opening_hours   = [
            "monday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "tuesday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "wednesday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "thursday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "friday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "saturday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "sunday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
        ];
        $this->shop->save();

        $this->card              = new Card;
        $this->card->instance_id = $this->instance->id;
        $this->card->creator_id  = $this->user->id;
        $this->card->last_name   = "Kitsune";
        $this->card->first_name  = "Yasu";
        $this->card->street      = "Foxstreet 10";
        $this->card->postcode    = "12345";
        $this->card->city        = "Foxhole";
        $this->card->comment     = "Comment";
        $this->card->valid_from  = "2022-07-04 12:00:00";
        $this->card->valid_until = "2022-07-04 12:00:00";
        $this->card->save();

        $this->reservation              = new Reservation();
        $this->reservation->instance_id = $this->instance->id;
        $this->reservation->card_id     = $this->card->id;
        $this->reservation->shop_id     = $this->shop->id;
        $this->reservation->time        = "2022-08-04 12:00:00";
        $this->reservation->save();
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
