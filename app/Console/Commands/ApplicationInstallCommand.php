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
            'external_employee' => Role::create(['name' => 'external_employees']),
            'external_manager' => Role::create(['name' => 'external_manager']),
            'employee' => Role::create(['name' => 'employee']),
            'organization_manager' => Role::create(['name' => 'organization_manager'])
        ];

        /** @var Permission[] $permissions */
        $permissions = [
            // Card permissions
            'admin.card.index' => Permission::create(['name', 'admin.card.index']),
            'admin.card.store' => Permission::create(['name', 'admin.card.store']),
            'admin.card.show' => Permission::create(['name', 'admin.card.show']),
            'admin.card.update' => Permission::create(['name', 'admin.card.update']),
            'admin.card.destroy' => Permission::create(['name', 'admin.card.destroy']),

            // Limitation permissions
            'admin.limitation.limit.index' => Permission::create(['name', 'admin.limitation.limit.index']),
            'admin.limitation.limit.store' => Permission::create(['name', 'admin.limitation.limit.store']),
            'admin.limitation.limit.show' => Permission::create(['name', 'admin.limitation.limit.show']),
            'admin.limitation.limit.update' => Permission::create(['name', 'admin.limitation.limit.update']),
            'admin.limitation.limit.destroy' => Permission::create(['name', 'admin.limitation.limit.destroy']),

            // Limitation Set permissions
            'admin.limitation.set.index' => Permission::create(['name', 'admin.limitation.set.index']),
            'admin.limitation.set.store' => Permission::create(['name', 'admin.limitation.set.store']),
            'admin.limitation.set.show' => Permission::create(['name', 'admin.limitation.set.show']),
            'admin.limitation.set.update' => Permission::create(['name', 'admin.limitation.set.update']),
            'admin.limitation.set.destroy' => Permission::create(['name', 'admin.limitation.set.destroy']),

            // LineItem permissions
            'admin.lineItem.index' => Permission::create(['name', 'admin.lineItem.index']),
            'admin.lineItem.store' => Permission::create(['name', 'admin.lineItem.store']),
            'admin.lineItem.show' => Permission::create(['name', 'admin.lineItem.show']),
            'admin.lineItem.update' => Permission::create(['name', 'admin.lineItem.update']),
            'admin.lineItem.destroy' => Permission::create(['name', 'admin.lineItem.destroy']),

            // Organization permissions
            'admin.organization.index' => Permission::create(['name', 'admin.organization.index']),
            'admin.organization.store' => Permission::create(['name', 'admin.organization.store']),
            'admin.organization.show' => Permission::create(['name', 'admin.organization.show']),
            'admin.organization.update' => Permission::create(['name', 'admin.organization.update']),
            'admin.organization.destroy' => Permission::create(['name', 'admin.organization.destroy']),

            // Person permissions
            'admin.person.index' => Permission::create(['name', 'admin.person.index']),
            'admin.person.store' => Permission::create(['name', 'admin.person.store']),
            'admin.person.show' => Permission::create(['name', 'admin.person.show']),
            'admin.person.update' => Permission::create(['name', 'admin.person.update']),
            'admin.person.destroy' => Permission::create(['name', 'admin.person.destroy']),

            // Product-Type permissions
            'admin.product-type.index' => Permission::create(['name', 'admin.product-type.index']),
            'admin.product-type.store' => Permission::create(['name', 'admin.product-type.store']),
            'admin.product-type.show' => Permission::create(['name', 'admin.product-type.show']),
            'admin.product-type.update' => Permission::create(['name', 'admin.product-type.update']),
            'admin.product-type.destroy' => Permission::create(['name', 'admin.product-type.destroy']),

            // Reservations permissions
            'admin.reservation.index' => Permission::create(['name', 'admin.reservation.index']),
            'admin.reservation.store' => Permission::create(['name', 'admin.reservation.store']),
            'admin.reservation.show' => Permission::create(['name', 'admin.reservation.show']),
            'admin.reservation.update' => Permission::create(['name', 'admin.reservation.update']),
            'admin.reservation.destroy' => Permission::create(['name', 'admin.reservation.destroy']),

            // Shop permissions
            'admin.shop.index' => Permission::create(['name', 'admin.shop.index']),
            'admin.shop.store' => Permission::create(['name', 'admin.shop.store']),
            'admin.shop.show' => Permission::create(['name', 'admin.shop.show']),
            'admin.shop.update' => Permission::create(['name', 'admin.shop.update']),
            'admin.shop.destroy' => Permission::create(['name', 'admin.shop.destroy']),

            // User permissions
            'admin.user.index' => Permission::create(['name', 'admin.user.index']),
            'admin.user.store' => Permission::create(['name', 'admin.user.store']),
            'admin.user.show' => Permission::create(['name', 'admin.user.show']),
            'admin.user.update' => Permission::create(['name', 'admin.user.update']),
            'admin.user.destroy' => Permission::create(['name', 'admin.user.destroy']),

            // Visit permissions
            'admin.visit.index' => Permission::create(['name', 'admin.visit.index']),
            'admin.visit.store' => Permission::create(['name', 'admin.visit.store']),
            'admin.visit.show' => Permission::create(['name', 'admin.visit.show']),
            'admin.visit.update' => Permission::create(['name', 'admin.visit.update']),
            'admin.visit.destroy' => Permission::create(['name', 'admin.visit.destroy']),

            // Authentication permissions
            'auth.app' => Permission::create(['name', 'auth.app']),
            'auth.admin' => Permission::create(['name', 'auth.admin']),

            // CardVisit permissions
            'card.visit.show' => Permission::create(['name', 'card.visit.show']),
            'card.visit.store' => Permission::create(['name', 'card.visit.store']),

            // PDF permissions
            'pdf.card' => Permission::create(['name', 'pdf.card']),

            // Schedule permissions
            'schedule.shops' => Permission::create(['name', 'schedule.shops']),
            'schedule.reservations' => Permission::create(['name', 'schedule.reservations']),
        ];

        //region external_employee
        $roles['external_employee']->givePermissionTo([
            $permissions['pdf.card'],

            $permissions['admin.card.index'],
            $permissions['admin.card.show'],
            $permissions['admin.card.store'],
            $permissions['admin.card.update'],
        ]);
        //endregion

        //region external_manager
        $roles['external_manager']->givePermissionTo([
            $permissions['pdf.card'],

            $permissions['admin.card.index'],
            $permissions['admin.card.store'],
            $permissions['admin.card.show'],
            $permissions['admin.card.update'],
            $permissions['admin.card.destroy'],

            $permissions['admin.organization.show'],
            $permissions['admin.organization.update']
        ]);
        //endregion

        //region employee
        $roles['employee']->givePermissionTo([
            $permissions['auth.app'],

            $permissions['schedule.shops'],
            $permissions['schedule.reservations'],

            $permissions['card.visit.show'],
            $permissions['card.visit.store']
        ]);
        //endregion

        //region organization_manager
        $roles['organization_manager']->givePermissionTo([
            $permissions['auth.admin'],

            $permissions['admin.card.index'],
            $permissions['admin.card.store'],
            $permissions['admin.card.show'],
            $permissions['admin.card.update'],
            $permissions['admin.card.destroy'],

            $permissions['admin.limitation.limit.index'],
            $permissions['admin.limitation.limit.store'],
            $permissions['admin.limitation.limit.show'],
            $permissions['admin.limitation.limit.update'],
            $permissions['admin.limitation.limit.destroy'],

            $permissions['admin.limitation.set.index'],
            $permissions['admin.limitation.set.store'],
            $permissions['admin.limitation.set.show'],
            $permissions['admin.limitation.set.update'],
            $permissions['admin.limitation.set.destroy'],

            $permissions['admin.lineItem.index'],
            $permissions['admin.lineItem.store'],
            $permissions['admin.lineItem.show'],
            $permissions['admin.lineItem.update'],
            $permissions['admin.lineItem.destroy'],

            $permissions['admin.organization.index'],
            $permissions['admin.organization.store'],
            $permissions['admin.organization.show'],
            $permissions['admin.organization.update'],
            $permissions['admin.organization.destroy'],

            $permissions['admin.person.index'],
            $permissions['admin.person.store'],
            $permissions['admin.person.show'],
            $permissions['admin.person.update'],
            $permissions['admin.person.destroy'],

            $permissions['admin.product-type.index'],
            $permissions['admin.product-type.store'],
            $permissions['admin.product-type.show'],
            $permissions['admin.product-type.update'],
            $permissions['admin.product-type.destroy'],

            $permissions['admin.reservation.index'],
            $permissions['admin.reservation.store'],
            $permissions['admin.reservation.show'],
            $permissions['admin.reservation.update'],
            $permissions['admin.reservation.destroy'],

            $permissions['admin.shop.index'],
            $permissions['admin.shop.store'],
            $permissions['admin.shop.show'],
            $permissions['admin.shop.update'],
            $permissions['admin.shop.destroy'],

            $permissions['admin.user.index'],
            $permissions['admin.user.store'],
            $permissions['admin.user.show'],
            $permissions['admin.user.update'],
            $permissions['admin.user.destroy'],

            $permissions['admin.visit.index'],
            $permissions['admin.visit.store'],
            $permissions['admin.visit.show'],
            $permissions['admin.visit.update'],
            $permissions['admin.visit.destroy'],

            $permissions['schedule.shops'],
            $permissions['schedule.reservations'],
        ]);
        //endregion


        return 0;
    }
}
