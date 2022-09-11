<?php

namespace App\Console\Commands;

use App\Models\Instance;
use App\Service\InstanceManagerService;
use Illuminate\Console\Command;
use ValueError;

class InstanceUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instance:update {instance}';

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
        $instance = Instance::find($this->argument('instance'));

        try {
            $instanceData = InstanceManagerService::askForInstanceDetails($this, $instance);
            $this->newLine();
        } catch (ValueError) {
            return 1;
        }

        $instance->name     = $instanceData['name'];
        $instance->street   = $instanceData['street'];
        $instance->postcode = $instanceData['postcode'];
        $instance->city     = $instanceData['city'];
        $instance->contact  = $instanceData['contact'];
        $instance->save();
        $this->info('Instance updated');

        return 0;
    }
}
