<?php

namespace Tests\Feature;

use App\Models\Card;
use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class CardTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $card;

    protected function setUp(): void
    {
        parent::setUp();

        $this->instance = new Instance;
        $this->instance->name = "Instance Name";
        $this->instance->street = "Instance Street";
        $this->instance->postcode = "12345";
        $this->instance->city = "Instance city";
        $this->instance->contact = "Instance contact";
        $this->instance->save();

        $this->organization = new Organization;
        $this->organization->name = "Organization Name";
        $this->organization->street = "Organization Street";
        $this->organization->postcode = "12345";
        $this->organization->city = "Organization City";
        $this->organization->contact = "Organization Contact";
        $this->instance->organizations()->save($this->organization);

        $this->user = new User;
        $this->user->name = "Test User Name";
        $this->user->email = "test@web.de";
        $this->user->password = Hash::make("Test User Password");
        $this->user->syncRoles("instance_manager");
        $this->user->instance_id = $this->instance->id;
        $this->organization->users()->save($this->user);

        $this->card = new Card;
        $this->card->instance_id = $this->instance->id;
        $this->card->creator_id = $this->user->id;
        $this->card->last_name = "Kitsune";
        $this->card->first_name = "Yasu";
        $this->card->street = "Foxstreet 10";
        $this->card->postcode = "12345";
        $this->card->city = "Foxhole";
        $this->card->comment = "Comment";
        $this->card->valid_from = "2022-07-04 12:00:00";
        $this->card->valid_until = "2022-07-04 12:00:00";
        $this->card->save();
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
            ->assertJsonStructure([
                "id",
                "last_name",
                "first_name",
                "street",
                "postcode",
                "city",
                "valid_from",
                "valid_until",
                "creator_id",
                "comment",
                "created_at",
                "updated_at"
            ])
            ->assertSuccessful();
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
            ->assertJsonStructure([
                "items" => [
                    [
                        "id",
                        "last_name",
                        "first_name",
                        "street",
                        "postcode",
                        "city",
                        "valid_from",
                        "valid_until",
                        "creator_id",
                        "comment",
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
            ])
            ->assertSuccessful();
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
            ->assertSuccessful();

        assertEquals(2, Card::count());
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
            ->assertSuccessful();

        $this->card = $this->card->refresh();
        assertEquals($payload['last_name'], $this->card->last_name);
        assertEquals($payload['first_name'], $this->card->first_name);
        assertEquals($payload['street'], $this->card->street);
        assertEquals($payload['postcode'], $this->card->postcode);
        assertEquals($payload['city'], $this->card->city);
        assertEquals($payload['valid_from'], $this->card->valid_from);
        assertEquals($payload['valid_until'], $this->card->valid_until);
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
            ->assertSuccessful();

        assertFalse(Card::exists());
    }
}