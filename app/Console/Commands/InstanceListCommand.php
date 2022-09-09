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
    protected $signature = 'instance:list {search?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lists all instances or search an instance by the given term';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
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

        if ($this->argument('search') !== null) {
            $this->table(
                array_values($columns),
                Instance::where('name', 'like', '%' . $this->argument('search') . '%')
                    ->orWhere('street', 'like', '%' . $this->argument('search') . '%')
                    ->orWhere('postcode', 'like', '%' . $this->argument('search') . '%')
                    ->orWhere('city', 'like', '%' . $this->argument('search') . '%')
                    ->orWhere('contact', 'like', '%' . $this->argument('search') . '%')
                    ->get()
                    ->toArray()
            );
        } else {
            $this->table(
                array_values($columns),
                Instance::all(array_keys($columns))->toArray()
            );
        }

        return 0;
    }
}
