<?php

namespace App\Console\Commands;

use App\Models\Instance;
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
    public function handle()
    {
        $instance = Instance::withCount(['organizations', 'users'])->find($this->argument('instance'));

        $this->info('ID: ' . $instance->id);
        $this->info('Name: ' . $instance->name);
        $this->info('Street: ' . $instance->street);
        $this->info('Postcode: ' . $instance->postcode);
        $this->info('City: ' . $instance->city);
        $this->info('Contact: ' . $instance->contact);
        $this->info('Created: ' . $instance->created_at->format('G:i \o\n l jS F Y'));
        $this->info('Updated: ' . $instance->updated_at->format('G:i \o\n l jS F Y'));
        $this->newline();
        $this->warn(sprintf(
            'This action will delete %s organizations with %s users.',
            $instance->organizations_count,
            $instance->users_count
        ));
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
