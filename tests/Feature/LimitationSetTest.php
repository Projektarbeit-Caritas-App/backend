<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\LimitationSet;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class LimitationSetTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $limitationSet;

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

        $this->limitationSet = new LimitationSet();
        $this->limitationSet->instance_id = $this->instance->id;
        $this->limitationSet->name = "A set to limit them all ~ Tolkien II";
        $this->limitationSet->valid_from = "2022-08-04 12:00:00";
        $this->limitationSet->valid_until = "2022-08-04 12:00:00";
        $this->limitationSet->save();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_limitationSet()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/limitation/set/' . $this->limitationSet->id)
            ->assertJsonStructure([
                "id",
                "name",
                "valid_from",
                "valid_until",
                "created_at",
                "updated_at"
            ])
            ->assertSuccessful();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_limitationSet()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/limitation/set/')
            ->assertJsonStructure([
                "items" => [
                    "*" => [
                        "id",
                        "name",
                        "valid_from",
                        "valid_until",
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
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_limitationSet()
    {
        $payload = [
            "name" => "Name",
            "valid_from" => "2022-04-04 12:00:00",
            "valid_until" => "2023-08-04 12:00:00"
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/limitation/set/', $payload)
            ->assertSuccessful();

        assertEquals(2, LimitationSet::count());
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_limitationSet()
    {
        $payload = [
            "name" => "Name",
            "valid_from" => "2022-04-04 12:00:00",
            "valid_until" => "2023-08-04 12:00:00"
        ];

        assertNotEquals($payload['name'], $this->limitationSet->name);
        assertNotEquals($payload['valid_from'], $this->limitationSet->valid_from);
        assertNotEquals($payload['valid_until'], $this->limitationSet->valid_until);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/limitation/set/' . $this->limitationSet->id, $payload)
            ->assertSuccessful();

        $this->limitationSet = $this->limitationSet->refresh();
        assertEquals($payload['name'], $this->limitationSet->name);
        assertEquals($payload['valid_from'], $this->limitationSet->valid_from);
        assertEquals($payload['valid_until'], $this->limitationSet->valid_until);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_limitationSet()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/limitation/set/' . $this->limitationSet->id)
            ->assertSuccessful();

        assertFalse(LimitationSet::exists());
    }
}
