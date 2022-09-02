<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class OrganizationTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_organization()
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
            ->get('/api/admin/organization/' . $organization->id)
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_organization()
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

        $organization2 = new Organization;
        $organization2->name = "Organization Name";
        $organization2->street = "Organization Street";
        $organization2->postcode = "12345";
        $organization2->city = "Organization City";
        $organization2->contact = "Organization Contact";
        $instance->organizations()->save($organization2);

        $user = new User;
        $user->name = "Test User Name";
        $user->email = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $response = $this->actingAs($user)
            ->get('/api/admin/organization/')
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_organization()
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
            'name' => 'Organization Name',
            'street' => "Organization Street",
            'postcode' => "12345",
            'city' => "Organization City",
            'contact' => "Organization Contact"
        ];

        $response = $this->actingAs($user)
            ->post('/api/admin/organization/', $payload)
            ->assertStatus(201)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_organization()
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
            'name' => 'Organization Name Updated',
            'street' => "Organization Street Updated",
            'postcode' => "12345 Updated",
            'city' => "Organization City Updated",
            'contact' => "Organization  UpdatedContact"
        ];

        $response = $this->actingAs($user)
            ->put('/api/admin/organization/' . $organization->id, $payload)
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_organization()
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

        $organization2 = new Organization;
        $organization2->name = "Organization Name";
        $organization2->street = "Organization Street";
        $organization2->postcode = "12345";
        $organization2->city = "Organization City";
        $organization2->contact = "Organization Contact";
        $instance->organizations()->save($organization2);

        $user = new User;
        $user->name = "Test User Name";
        $user->email = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $response = $this->actingAs($user)
            ->delete('/api/admin/organization/' . $organization2->id)
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_only_existing_organization()
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
            ->delete('/api/admin/organization/' . $organization->id)
            ->assertStatus(200)
            ->withHeaders(['Content-Type' => 'application/json', 'Accept' => 'application/json']);
    }
}
