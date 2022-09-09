<?php

namespace Tests\Feature;

use App\Models\Card;
use App\Models\Instance;
use App\Models\Organization;
use App\Models\Person;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class PersonTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $card;
    private $person;

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

        $this->person = new Person();
        $this->person->instance_id = $this->instance->id;
        $this->person->card_id = $this->card->id;
        $this->person->gender = "male";
        $this->person->age = 18;
        $this->person->save();
    }

    /**
     * Test positive behavior of show person
     *
     * @return void
     */
    public function test_show_person()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/person/' . $this->person->id)
            ->assertJsonStructure([
                "id",
                "card_id",
                "gender",
                "age",
                "created_at",
                "updated_at"
            ])
            ->assertSuccessful();
    }

    /**
     * Test positive behavior of index person
     *
     * @return void
     */
    public function test_index_person()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/person/')
            ->assertJsonStructure([
                "items" => [
                    [
                        "id",
                        "card_id",
                        "gender",
                        "age",
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
     * Test positive behavior of create person
     *
     * @return void
     */
    public function test_create_person()
    {
        $payload = [
            "card_id" => $this->card->id,
            "gender" => "male",
            "age" => 18
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/person/', $payload)
            ->assertSuccessful();

        assertEquals(2, Person::count());
    }

    /**
     * Test positive behavior of update person
     *
     * @return void
     */
    public function test_update_person()
    {
        $payload = [
            "card_id" => $this->person->card_id,
            "gender" => "female",
            "age" => 20
        ];

        assertNotEquals($payload['gender'], $this->person->gender);
        assertNotEquals($payload['age'], $this->person->age);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/person/' . $this->person->id, $payload)
            ->assertSuccessful();

        $this->person = $this->person->refresh();
        assertEquals($payload['gender'], $this->person->gender);
        assertEquals($payload['age'], $this->person->age);
    }

    /**
     * Test positive behavior of delete person
     *
     * @return void
     */
    public function test_delete_person()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/person/' . $this->person->id)
            ->assertSuccessful();

        assertFalse(Person::exists());
    }
}
