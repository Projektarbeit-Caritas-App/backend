<?php

namespace App\Console\Commands;

use App\Models\Instance;
use App\Service\InstanceManagerService;
use Illuminate\Console\Command;

class InstanceDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instance:delete {instance}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes an exiting instance';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $instance = InstanceManagerService::printSingleInstanceToConsole($this, $this->argument('instance'));
        $this->newline();

        $this->warn('All data connected to this instance will be deleted permanently and cannot be restored!');
        $this->newLine();

        if ($this->confirm('Do you really want to delete the instance?')) {
            if ($instance->delete()) {
                $this->info('Instance deleted');
            } else {
                $this->error('Deletion failed');
            }
        } else {
            $this->info('Deletion canceled');
        }

        return 0;
    }
}
