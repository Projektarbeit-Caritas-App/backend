<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class InstanceTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test positive behavior of create instance
     *
     * @return void
     */
    public function test_create_instance_command()
    {
        $this->artisan('instance:create')
            ->expectsOutput('Details for the new instance:')
            ->expectsQuestion('Name', 'Test Instance Name')
            ->expectsQuestion('Street', 'Test Instance Street')
            ->expectsQuestion('Postcode', 'Test Instance Postcode')
            ->expectsQuestion('City', 'Test Instance City')
            ->expectsQuestion('Contact', 'Test Instance Contact')
            ->expectsOutput('Details for the admin user of the instance:')
            ->expectsQuestion('Name', 'Test User Name')
            ->expectsQuestion('E-Mail', 'test@web.de')
            ->expectsQuestion('Password', 'Test User Password 123')
            ->expectsQuestion('Confirm Password', 'Test User Password 123')
            ->expectsOutput('Instance created')
            ->expectsOutput('Organization created')
            ->expectsOutput('User created')
            ->assertSuccessful();
    }

    /**
     * Test positive behavior of delete instance
     *
     * @return void
     */
    public function test_delete_instance_command()
    {
        $instance             = new Instance;
        $instance->name       = "Instance Name";
        $instance->street     = "Instance Street";
        $instance->postcode   = "12345";
        $instance->city       = "Instance city";
        $instance->contact    = "Instance contact";
        $instance->created_at = "2022-07-04 12:00:00";
        $instance->updated_at = "2022-07-04 12:00:00";
        $instance->save();

        $organization           = new Organization;
        $organization->name     = "Organization Name";
        $organization->street   = "Organization Street";
        $organization->postcode = "12345";
        $organization->city     = "Organization City";
        $organization->contact  = "Organization Contact";
        $instance->organizations()->save($organization);

        $user           = new User;
        $user->name     = "Test User Name";
        $user->email    = "test@web.de";
        $user->password = Hash::make("Test User Password");
        $user->syncRoles("instance_manager");
        $user->instance_id = $instance->id;
        $organization->users()->save($user);

        $instance->loadCount(['organizations', 'users']);

        $this->artisan('instance:delete', ['instance' => $instance->id])
            ->expectsOutput('      ID: ' . $instance->id)
            ->expectsOutput('    Name: ' . $instance->name)
            ->expectsOutput('  Street: ' . $instance->street)
            ->expectsOutput('Postcode: ' . $instance->postcode)
            ->expectsOutput('    City: ' . $instance->city)
            ->expectsOutput(' Contact: ' . $instance->contact)
            ->expectsOutput(' Created: ' . $instance->created_at->format('G:i \o\n l jS F Y'))
            ->expectsOutput(' Updated: ' . $instance->updated_at->format('G:i \o\n l jS F Y'))
            ->expectsConfirmation('Do you really want to delete the instance?', 'yes')
            ->expectsOutput('Instance deleted')
            ->assertSuccessful();

        $this->assertModelMissing($instance)
            ->assertModelMissing($organization)
            ->assertModelMissing($user);
    }
}
