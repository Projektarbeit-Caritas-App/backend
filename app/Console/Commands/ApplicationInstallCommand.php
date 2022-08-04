<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ApplicationInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepares everything for usage of the application';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /** @var Role[] $roles */
        $roles = [
            'employee' => Role::create(['name' => 'employee']),
            'external_user' => Role::create(['name' => 'external_user']),
            'instance_manager' => Role::create(['name' => 'instance_manager']),
            'organization_manager' => Role::create(['name' => 'organization_manager']),
            'statistician' => Role::create(['name' => 'statistician'])
        ];

        /** @var Permission[] $permissions */
        $permissions = [
            'card.external' => Permission::create(['name' => 'card.external']),
            'card.manage' => Permission::create(['name' => 'card.manage']),
            'card.view' => Permission::create(['name' => 'card.view']),
            'limits.manage' => Permission::create(['name' => 'limits.manage']),
            'organisation.manage' => Permission::create(['name' => 'organisation.manage']),
            'organisation.view' => Permission::create(['name' => 'organisation.view']),
            'shop.manage' => Permission::create(['name' => 'shop.manage']),
            'shop.view' => Permission::create(['name' => 'shop.view']),
            'stats.view' => Permission::create(['name' => 'stats.view']),
            'user.manage' => Permission::create(['name' => 'user.manage']),
            'user.view' => Permission::create(['name' => 'user.view'])
        ];

        $roles['employee']->givePermissionTo([
            $permissions['card.view']
        ]);

        $roles['instance_manager']->givePermissionTo(
            $permissions['card.manage'],
            $permissions['card.view'],
            $permissions['limits.manage'],
            $permissions['organisation.manage'],
            $permissions['organisation.view'],
            $permissions['shop.manage'],
            $permissions['shop.view'],
            $permissions['stats.view'],
            $permissions['user.manage'],
            $permissions['user.view']
        );

        $roles['organization_manager']->givePermissionTo(
            $permissions['card.manage'],
            $permissions['card.view'],
            $permissions['limits.manage'],
            $permissions['shop.manage'],
            $permissions['shop.view'],
            $permissions['stats.view'],
            $permissions['user.manage'],
            $permissions['user.view']
        );

        $roles['external_user']->givePermissionTo(
            $permissions['card.external']
        );

        $roles['statistician']->givePermissionTo(
            $permissions['stats.view']
        );

        return 0;
    }
}
