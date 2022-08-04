<?php

namespace App\Console\Commands;

use App\Models\Instance;
use Illuminate\Console\Command;

class InstanceListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instance:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lists all instances';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $columns = [
            'id' => 'ID',
            'name' => 'Name',
            'street' => 'Street',
            'postcode' => 'Postcode',
            'city' => 'City',
            'contact' => 'Contact',
            'created_at' => 'Created',
            'updated_at' => 'Updated'
        ];

        $this->table(
            array_values($columns),
            Instance::all(array_keys($columns))->toArray()
        );

        return 0;
    }
}
