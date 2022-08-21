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
    public function handle(): int
    {
        $roles = $this->registerRoles();
        $this->registerPermissions();

        $roles['external_employee']->givePermissionTo([
            'admin.card.index',
            'admin.card.store',
            'admin.card.show',
            'admin.card.update',
            'admin.person.index',
            'admin.person.store',
            'admin.person.show',
            'admin.person.update',
            'admin.person.destroy',
            'auth.admin',
            'pdf.card',
        ]);

        $roles['external_manager']->givePermissionTo([
            'admin.card.index',
            'admin.card.store',
            'admin.card.show',
            'admin.card.update',
            'admin.card.destroy',
            'admin.organization.update.own',
            'admin.person.index',
            'admin.person.store',
            'admin.person.show',
            'admin.person.update',
            'admin.person.destroy',
            'admin.user.index.own',
            'admin.user.store.own',
            'admin.user.show.own',
            'admin.user.update.own',
            'admin.user.destroy.own',
            'auth.admin',
            'pdf.card',
        ]);

        $roles['employee']->givePermissionTo([
            'auth.app',
            'card.visit.show',
            'card.visit.store',
            'pdf.card',
            'schedule.shops',
            'schedule.reservations'
        ]);

        $roles['organization_manager']->givePermissionTo([
            'admin.card.index',
            'admin.card.store',
            'admin.card.show',
            'admin.card.update',
            'admin.card.destroy',
            'admin.limitation.limit.index',
            'admin.limitation.limit.store',
            'admin.limitation.limit.show',
            'admin.limitation.limit.update',
            'admin.limitation.limit.destroy',
            'admin.limitation.set.index',
            'admin.limitation.set.store',
            'admin.limitation.set.show',
            'admin.limitation.set.update',
            'admin.limitation.set.destroy',
            'admin.lineItem.index',
            'admin.lineItem.store',
            'admin.lineItem.show',
            'admin.lineItem.update',
            'admin.lineItem.destroy',
            'admin.organization.update.own',
            'admin.person.index',
            'admin.person.store',
            'admin.person.show',
            'admin.person.update',
            'admin.person.destroy',
            'admin.product-type.index',
            'admin.product-type.store',
            'admin.product-type.show',
            'admin.product-type.update',
            'admin.product-type.destroy',
            'admin.reservation.index.own',
            'admin.reservation.store.own',
            'admin.reservation.show.own',
            'admin.reservation.update.own',
            'admin.reservation.destroy.own',
            'admin.shop.index.own',
            'admin.shop.store.own',
            'admin.shop.show.own',
            'admin.shop.update.own',
            'admin.shop.destroy.own',
            'admin.user.index.own',
            'admin.user.store.own',
            'admin.user.show.own',
            'admin.user.update.own',
            'admin.user.destroy.own',
            'admin.visit.index',
            'admin.visit.store',
            'admin.visit.show',
            'admin.visit.update',
            'admin.visit.destroy',
            'auth.app',
            'auth.admin',
            'card.visit.show',
            'card.visit.store',
            'pdf.card',
            'schedule.shops',
            'schedule.reservations'
        ]);

        $roles['instance_manager']->givePermissionTo([
            'admin.card.index',
            'admin.card.store',
            'admin.card.show',
            'admin.card.update',
            'admin.card.destroy',
            'admin.limitation.limit.index',
            'admin.limitation.limit.store',
            'admin.limitation.limit.show',
            'admin.limitation.limit.update',
            'admin.limitation.limit.destroy',
            'admin.limitation.set.index',
            'admin.limitation.set.store',
            'admin.limitation.set.show',
            'admin.limitation.set.update',
            'admin.limitation.set.destroy',
            'admin.lineItem.index',
            'admin.lineItem.store',
            'admin.lineItem.show',
            'admin.lineItem.update',
            'admin.lineItem.destroy',
            'admin.organization.index',
            'admin.organization.store',
            'admin.organization.show',
            'admin.organization.update',
            'admin.organization.destroy',
            'admin.person.index',
            'admin.person.store',
            'admin.person.show',
            'admin.person.update',
            'admin.person.destroy',
            'admin.product-type.index',
            'admin.product-type.store',
            'admin.product-type.show',
            'admin.product-type.update',
            'admin.product-type.destroy',
            'admin.reservation.index',
            'admin.reservation.store',
            'admin.reservation.show',
            'admin.reservation.update',
            'admin.reservation.destroy',
            'admin.shop.index',
            'admin.shop.store',
            'admin.shop.show',
            'admin.shop.update',
            'admin.shop.destroy',
            'admin.user.index',
            'admin.user.store',
            'admin.user.show',
            'admin.user.update',
            'admin.user.destroy',
            'admin.visit.index',
            'admin.visit.store',
            'admin.visit.show',
            'admin.visit.update',
            'admin.visit.destroy',
            'auth.app',
            'auth.admin',
            'card.visit.show',
            'card.visit.store',
            'pdf.card',
            'schedule.shops',
            'schedule.reservations'
        ]);

        return 0;
    }

    /**
     * @return Role[]
     */
    private function registerRoles(): array
    {
        return [
            'inactive' => Role::create(['name' => 'inactive']),
            'external_employee' => Role::create(['name' => 'external_employees']),
            'external_manager' => Role::create(['name' => 'external_manager']),
            'employee' => Role::create(['name' => 'employee']),
            'organization_manager' => Role::create(['name' => 'organization_manager']),
            'instance_manager' => Role::create(['name' => 'instance_manager']),
        ];
    }

    private function registerPermissions()
    {
        $permissions = [
            // Card permissions
            'admin.card.index',
            'admin.card.store',
            'admin.card.show',
            'admin.card.update',
            'admin.card.destroy',

            // Limitation permissions
            'admin.limitation.limit.index',
            'admin.limitation.limit.store',
            'admin.limitation.limit.show',
            'admin.limitation.limit.update',
            'admin.limitation.limit.destroy',

            // Limitation Set permissions
            'admin.limitation.set.index',
            'admin.limitation.set.store',
            'admin.limitation.set.show',
            'admin.limitation.set.update',
            'admin.limitation.set.destroy',

            // LineItem permissions
            'admin.lineItem.index',
            'admin.lineItem.store',
            'admin.lineItem.show',
            'admin.lineItem.update',
            'admin.lineItem.destroy',

            // Organization permissions
            'admin.organization.index',
            'admin.organization.store',
            'admin.organization.show',
            'admin.organization.update',
            'admin.organization.update.own',
            'admin.organization.destroy',

            // Person permissions
            'admin.person.index',
            'admin.person.store',
            'admin.person.show',
            'admin.person.update',
            'admin.person.destroy',

            // Product-Type permissions
            'admin.product-type.index',
            'admin.product-type.store',
            'admin.product-type.show',
            'admin.product-type.update',
            'admin.product-type.destroy',

            // Reservations permissions
            'admin.reservation.index',
            'admin.reservation.index.own',
            'admin.reservation.store',
            'admin.reservation.store.own',
            'admin.reservation.show',
            'admin.reservation.show.own',
            'admin.reservation.update',
            'admin.reservation.update.own',
            'admin.reservation.destroy',
            'admin.reservation.destroy.own',

            // Shop permissions
            'admin.shop.index',
            'admin.shop.index.own',
            'admin.shop.store',
            'admin.shop.store.own',
            'admin.shop.show',
            'admin.shop.show.own',
            'admin.shop.update',
            'admin.shop.update.own',
            'admin.shop.destroy',
            'admin.shop.destroy.own',

            // User permissions
            'admin.user.index',
            'admin.user.index.own',
            'admin.user.store',
            'admin.user.store.own',
            'admin.user.show',
            'admin.user.show.own',
            'admin.user.update',
            'admin.user.update.own',
            'admin.user.destroy',
            'admin.user.destroy.own',

            // Visit permissions
            'admin.visit.index',
            'admin.visit.store',
            'admin.visit.show',
            'admin.visit.update',
            'admin.visit.destroy',

            // Authentication permissions
            'auth.app',
            'auth.admin',

            // CardVisit permissions
            'card.visit.show',
            'card.visit.store',

            // PDF permissions
            'pdf.card',

            // Schedule permissions
            'schedule.shops',
            'schedule.reservations'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
