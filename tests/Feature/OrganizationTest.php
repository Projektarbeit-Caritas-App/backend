<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;

class OrganizationTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;

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
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_organization()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/organization/' . $this->organization->id)
            ->assertJsonStructure([
                "id",
                "instance_id",
                "name",
                "street",
                "postcode",
                "city",
                "contact",
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
    public function test_index_organization()
    {
        $organization2 = new Organization;
        $organization2->name = "Organization Name";
        $organization2->street = "Organization Street";
        $organization2->postcode = "12345";
        $organization2->city = "Organization City";
        $organization2->contact = "Organization Contact";
        $this->instance->organizations()->save($organization2);

        $response = $this->actingAs($this->user)
            ->get('/api/admin/organization/')
            ->assertJsonStructure([
                "items" => [
                    "*" => [
                        "id",
                        "instance_id",
                        "name",
                        "street",
                        "postcode",
                        "city",
                        "contact",
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
    public function test_create_organization()
    {
        $payload = [
            'name' => 'Organization Name',
            'street' => "Organization Street",
            'postcode' => "12345",
            'city' => "Organization City",
            'contact' => "Organization Contact"
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/organization/', $payload)
            ->assertSuccessful();

        assertEquals(2, Organization::count());
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_organization()
    {
        $payload = [
            'name' => 'Organization Name Updated',
            'street' => "Organization Street Updated",
            'postcode' => "12345 Updated",
            'city' => "Organization City Updated",
            'contact' => "Organization  UpdatedContact"
        ];

        $response = $this->actingAs($this->user)
            ->put('/api/admin/organization/' . $this->organization->id, $payload)
            ->assertSuccessful();

        $this->organization = $this->organization->refresh();
        assertEquals($payload['name'], $this->organization->name);
        assertEquals($payload['street'], $this->organization->street);
        assertEquals($payload['postcode'], $this->organization->postcode);
        assertEquals($payload['city'], $this->organization->city);
        assertEquals($payload['contact'], $this->organization->contact);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_organization()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/organization/' . $this->organization->id)
            ->assertSuccessful();

        assertFalse(Organization::exists());
    }
}
