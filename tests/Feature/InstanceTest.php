<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class InstanceTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
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
           ->expectsQuestion('Password', 'Test User Password')
           ->expectsQuestion('Confirm Password', 'Test User Password')
           ->expectsOutput('Instance created')
           ->expectsOutput('Organization created')
           ->expectsOutput('User created')
           ->assertSuccessful();
    }
}
