<?php

namespace App\Console\Commands;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use App\Service\InstanceManagerService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use ValueError;

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
    public function handle(): int
    {
        try {
            $this->info('Details for the new instance:');
            $instanceData = InstanceManagerService::askForInstanceDetails($this);

            $this->info('Details for the admin user of the instance:');
            $userData = InstanceManagerService::askForUserDetails($this);
        } catch (ValueError) {
            return 1;
        }

        $instance           = new Instance;
        $instance->name     = $instanceData['name'];
        $instance->street   = $instanceData['street'];
        $instance->postcode = $instanceData['postcode'];
        $instance->city     = $instanceData['city'];
        $instance->contact  = $instanceData['contact'];
        $instance->save();
        $this->info('Instance created');

        $organization           = new Organization;
        $organization->name     = $instanceData['name'];
        $organization->street   = $instanceData['street'];
        $organization->postcode = $instanceData['postcode'];
        $organization->city     = $instanceData['city'];
        $organization->contact  = $instanceData['contact'];
        $instance->organizations()->save($organization);
        $this->info('Organization created');

        $user              = new User;
        $user->name        = $userData['username'];
        $user->email       = $userData['email'];
        $user->password    = Hash::make($userData['password']);
        $user->instance_id = $instance->id;
        $organization->users()->save($user);
        $user->assignRole('instance_manager');
        $this->info('User created');

        return 0;
    }
}
