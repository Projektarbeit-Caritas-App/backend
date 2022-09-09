<?php

namespace App\Console\Commands;

use App\Models\Instance;
use App\Service\InstanceManagerService;
use Illuminate\Console\Command;

class InstanceShowCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instance:show {instance}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shows a single instance by ID';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        InstanceManagerService::printSingleInstanceToConsole($this, $this->argument('instance'));
        return 0;
    }
}
