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
use function PHPUnit\Framework\assertNotEquals;

class UserTest extends TestCase
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
    public function test_show_user()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/user/' . $this->user->id)
            ->assertJsonStructure([
                "id",
                "instance_id",
                "organization_id",
                "name",
                "email",
                "created_at",
                "updated_at"
            ])->assertSuccessful();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_user()
    {
        $user2 = new User;
        $user2->name = "Test User Name2";
        $user2->email = "test2@web.de";
        $user2->password = Hash::make("Test User Password 2");
        $user2->syncRoles("instance_manager");
        $user2->instance_id = $this->instance->id;
        $this->organization->users()->save($user2);

        $response = $this->actingAs($this->user)
            ->get('/api/admin/user/')
            ->assertJsonStructure([
                "items" => [
                    [
                        "id",
                        "instance_id",
                        "organization_id",
                        "name",
                        "email",
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
    public function test_create_user()
    {
        $payload = [
            'organization_id' => $this->organization->id,
            'name' => 'Test User Name 2',
            'email' => 'test2@web.de',
            'password' => "!22Test73Pass#",
            'password_confirmation' => "!22Test73Pass#",
            'role' => "instance_manager"
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/user/', $payload)
            ->assertSuccessful();

        assertEquals(2, User::count());
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_user()
    {
        $payload = [
            'organization_id' => $this->organization->id,
            'name' => 'Test User Name 2',
            'email' => 'test2@web.de',
            'password' => "!22Test73Pass#",
            'password_confirmation' => "!22Test73Pass#",
            'role' => "instance_manager"
        ];

        assertNotEquals($payload['name'], $this->user->name);
        assertNotEquals($payload['email'], $this->user->email);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/user/' . $this->user->id, $payload)
            ->assertSuccessful();

        $oldPassword = $this->user->password;
        $this->user = $this->user->refresh();

        assertEquals($payload['name'], $this->user->name);
        assertEquals($payload['email'], $this->user->email);
        assertNotEquals($oldPassword, $this->user->password);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_user()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/user/' . $this->user->id)
            ->assertSuccessful();

        assertFalse(User::exists());
    }
}
