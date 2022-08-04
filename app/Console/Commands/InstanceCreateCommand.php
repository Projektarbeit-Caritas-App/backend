<?php

namespace App\Console\Commands;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class InstanceCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instance:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new instance and an initial user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Details for the new instance:');
        $name     = $this->ask('Name');
        $street   = $this->ask('Street');
        $postcode = $this->ask('Postcode');
        $city     = $this->ask('City');
        $contact  = $this->ask('Contact');
        $this->newLine();

        $this->info('Details for the admin user of the instance:');
        $username         = $this->ask('Name');
        $email            = $this->ask('E-Mail');
        $password         = $this->secret('Password');
        $password_confirm = $this->secret('Confirm Password');

        while ($password !== $password_confirm) {
            $this->newLine();
            $this->error('Passwords do not match, please retry');
            $password         = $this->secret('Password');
            $password_confirm = $this->secret('Confirm Password');
        }

        $this->newLine();

        $instance             = new Instance;
        $instance->name       = $name;
        $instance->street     = $street;
        $instance->postcode   = $postcode;
        $instance->city       = $city;
        $instance->contact    = $contact;
        $instance->save();
        $this->info('Instance created');

        $organization             = new Organization;
        $organization->name       = $name;
        $organization->street     = $street;
        $organization->postcode   = $postcode;
        $organization->city       = $city;
        $organization->contact    = $contact;
        $instance->organizations()->save($organization);
        $this->info('Organization created');

        $user              = new User;
        $user->name        = $username;
        $user->email       = $email;
        $user->password    = Hash::make($password);
        $user->instance_id = $instance->id;
        $organization->users()->save($user);
        $this->info('User created');

        return 0;
    }
}
