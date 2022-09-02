<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_user()
    {
        $instance = new Instance;
        $instance->name = "Instance Name";
        $instance->street = "Instance Street";
        $instance->postcode = "12345";
        $instance->city = "Instance city";
        $instance->contact = "Instance contact";
        $instance->save();

        $organization = new Organization;
        $organization->name = "Organization Name";
        $organization->street = "Organization Street";
        $organization->postcode = "12345";
        $organization->city = "Organization City";
        $organization->contact = "Organization Contact";
        $instance->organizations()->save($organization);

        $user = new User;
        $user->name = "Test User Name";
        $user->email = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $response = $this->actingAs($user)
            ->get('/api/admin/user/' . $user->id)
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_user()
    {
        $instance = new Instance;
        $instance->name = "Instance Name";
        $instance->street = "Instance Street";
        $instance->postcode = 12345;
        $instance->city = "Instance city";
        $instance->contact = "Instance contact";
        $instance->save();

        $organization = new Organization;
        $organization->name = "Organization Name";
        $organization->street = "Organization Street";
        $organization->postcode = "12345";
        $organization->city = "Organization City";
        $organization->contact = "Organization Contact";
        $instance->organizations()->save($organization);

        $user = new User;
        $user->name = "Test User Name";
        $user->email = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $user2 = new User;
        $user2->name = "Test User Name2";
        $user2->email = "test2@web.de";
        $user2->password = Hash::make("Test User Password 2");
        $user2->syncRoles("instance_manager");
        $user2->instance_id = $instance->id;
        $organization->users()->save($user2);

        $response = $this->actingAs($user)
            ->get('/api/admin/user/')
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_user()
    {
        $instance = new Instance;
        $instance->name = "Instance Name";
        $instance->street = "Instance Street";
        $instance->postcode = "12345";
        $instance->city = "Instance city";
        $instance->contact = "Instance contact";
        $instance->save();

        $organization = new Organization;
        $organization->name = "Organization Name";
        $organization->street = "Organization Street";
        $organization->postcode = "12345";
        $organization->city = "Organization City";
        $organization->contact = "Organization Contact";
        $instance->organizations()->save($organization);

        $user = new User;
        $user->name = "Test User Name";
        $user->email = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $payload = [
            'organization_id' => $organization->id,
            'name' => 'Test User Name 2',
            'email' => 'test2@web.de',
            'password' => "!22Test73Pass#",
            'password_confirmation' => "!22Test73Pass#",
            'role' => "instance_manager"
        ];

        $response = $this->actingAs($user)
            ->post('/api/admin/user/', $payload)
            ->assertStatus(201)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_user()
    {
        $instance = new Instance;
        $instance->name = "Instance Name";
        $instance->street = "Instance Street";
        $instance->postcode = "12345";
        $instance->city = "Instance city";
        $instance->contact = "Instance contact";
        $instance->save();

        $organization = new Organization;
        $organization->name = "Organization Name";
        $organization->street = "Organization Street";
        $organization->postcode = "12345";
        $organization->city = "Organization City";
        $organization->contact = "Organization Contact";
        $instance->organizations()->save($organization);

        $user = new User;
        $user->name = "Test User Name";
        $user->email = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $payload = [
            'organization_id' => $organization->id,
            'name' => 'Test User Name 2',
            'email' => 'test2@web.de',
            'password' => "!22Test73Pass#",
            'password_confirmation' => "!22Test73Pass#",
            'role' => "instance_manager"
        ];

        $response = $this->actingAs($user)
            ->put('/api/admin/user/' . $user->id, $payload)
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_user()
    {
        $instance = new Instance;
        $instance->name = "Instance Name";
        $instance->street = "Instance Street";
        $instance->postcode = 12345;
        $instance->city = "Instance city";
        $instance->contact = "Instance contact";
        $instance->save();

        $organization = new Organization;
        $organization->name = "Organization Name";
        $organization->street = "Organization Street";
        $organization->postcode = "12345";
        $organization->city = "Organization City";
        $organization->contact = "Organization Contact";
        $instance->organizations()->save($organization);

        $user = new User;
        $user->name = "Test User Name";
        $user->email = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $response = $this->actingAs($user)
            ->delete('/api/admin/user/' . $user->id)
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }
}
