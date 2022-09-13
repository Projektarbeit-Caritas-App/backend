<?php

namespace Tests\Feature\PersonTest;

use App\Models\Person;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class PersonOrganizationManagerTest extends PersonTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->user->syncRoles('organization_manager');
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
