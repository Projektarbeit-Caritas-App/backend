<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Card;
use App\Models\Shop;
use App\Models\User;
use App\Policies\CardManagerPolicy;
use App\Policies\LimitationManagerPolicy;
use App\Policies\LimitationSetManagerPolicy;
use App\Policies\LineItemManagerPolicy;
use App\Policies\OrganizationManagerPolicy;
use App\Policies\PersonManagerPolicy;
use App\Policies\ProductTypeManagerPolicy;
use App\Policies\ReservationManagerPolicy;
use App\Policies\ShopManagerPolicy;
use App\Policies\UserManagerPolicy;
use App\Policies\VisitManagerPolicy;
use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Card
        Gate::define('admin.card.index', [CardManagerPolicy::class, 'index']);
        Gate::define('admin.card.store', [CardManagerPolicy::class, 'store']);
        Gate::define('admin.card.show', [CardManagerPolicy::class, 'show']);
        Gate::define('admin.card.update', [CardManagerPolicy::class, 'update']);
        Gate::define('admin.card.destroy', [CardManagerPolicy::class, 'destroy']);

        // Limitation
        Gate::define('admin.limitation.limit.index', [LimitationManagerPolicy::class, 'index']);
        Gate::define('admin.limitation.limit.store', [LimitationManagerPolicy::class, 'store']);
        Gate::define('admin.limitation.limit.show', [LimitationManagerPolicy::class, 'show']);
        Gate::define('admin.limitation.limit.update', [LimitationManagerPolicy::class, 'update']);
        Gate::define('admin.limitation.limit.destroy', [LimitationManagerPolicy::class, 'destroy']);

        // LimitationSet
        Gate::define('admin.limitation.set.index', [LimitationSetManagerPolicy::class, 'index']);
        Gate::define('admin.limitation.set.store', [LimitationSetManagerPolicy::class, 'store']);
        Gate::define('admin.limitation.set.show', [LimitationSetManagerPolicy::class, 'show']);
        Gate::define('admin.limitation.set.update', [LimitationSetManagerPolicy::class, 'update']);
        Gate::define('admin.limitation.set.destroy', [LimitationSetManagerPolicy::class, 'destroy']);

        // LineItem
        Gate::define('admin.lineItem.index', [LineItemManagerPolicy::class, 'index']);
        Gate::define('admin.lineItem.store', [LineItemManagerPolicy::class, 'store']);
        Gate::define('admin.lineItem.show', [LineItemManagerPolicy::class, 'show']);
        Gate::define('admin.lineItem.update', [LineItemManagerPolicy::class, 'update']);
        Gate::define('admin.lineItem.destroy', [LineItemManagerPolicy::class, 'destroy']);

        // Organization
        Gate::define('admin.organization.index', [OrganizationManagerPolicy::class, 'index']);
        Gate::define('admin.organization.store', [OrganizationManagerPolicy::class, 'store']);
        Gate::define('admin.organization.show', [OrganizationManagerPolicy::class, 'show']);
        Gate::define('admin.organization.update', [OrganizationManagerPolicy::class, 'update']);
        Gate::define('admin.organization.destroy', [OrganizationManagerPolicy::class, 'destroy']);

        // Person
        Gate::define('admin.person.index', [PersonManagerPolicy::class, 'index']);
        Gate::define('admin.person.store', [PersonManagerPolicy::class, 'store']);
        Gate::define('admin.person.show', [PersonManagerPolicy::class, 'show']);
        Gate::define('admin.person.update', [PersonManagerPolicy::class, 'update']);
        Gate::define('admin.person.destroy', [PersonManagerPolicy::class, 'destroy']);

        // ProductType
        Gate::define('admin.product-type.index', [ProductTypeManagerPolicy::class, 'index']);
        Gate::define('admin.product-type.store', [ProductTypeManagerPolicy::class, 'store']);
        Gate::define('admin.product-type.show', [ProductTypeManagerPolicy::class, 'show']);
        Gate::define('admin.product-type.update', [ProductTypeManagerPolicy::class, 'update']);
        Gate::define('admin.product-type.destroy', [ProductTypeManagerPolicy::class, 'destroy']);

        // Reservation
        Gate::define('admin.reservation.index', [ReservationManagerPolicy::class, 'index']);
        Gate::define('admin.reservation.store', [ReservationManagerPolicy::class, 'store']);
        Gate::define('admin.reservation.show', [ReservationManagerPolicy::class, 'show']);
        Gate::define('admin.reservation.update', [ReservationManagerPolicy::class, 'update']);
        Gate::define('admin.reservation.destroy', [ReservationManagerPolicy::class, 'destroy']);

        // Shop
        Gate::define('admin.shop.index', [ShopManagerPolicy::class, 'index']);
        Gate::define('admin.shop.store', [ShopManagerPolicy::class, 'store']);
        Gate::define('admin.shop.show', [ShopManagerPolicy::class, 'show']);
        Gate::define('admin.shop.update', [ShopManagerPolicy::class, 'update']);
        Gate::define('admin.shop.destroy', [ShopManagerPolicy::class, 'destroy']);

        // User
        Gate::define('admin.user.index', [UserManagerPolicy::class, 'index']);
        Gate::define('admin.user.store', [UserManagerPolicy::class, 'store']);
        Gate::define('admin.user.show', [UserManagerPolicy::class, 'show']);
        Gate::define('admin.user.update', [UserManagerPolicy::class, 'update']);
        Gate::define('admin.user.destroy', [UserManagerPolicy::class, 'destroy']);

        // Visit
        Gate::define('admin.visit.index', [VisitManagerPolicy::class, 'index']);
        Gate::define('admin.visit.store', [VisitManagerPolicy::class, 'store']);
        Gate::define('admin.visit.show', [VisitManagerPolicy::class, 'show']);
        Gate::define('admin.visit.update', [VisitManagerPolicy::class, 'update']);
        Gate::define('admin.visit.destroy', [VisitManagerPolicy::class, 'destroy']);

        // Checkout
        Gate::define('card.visit.show', function (User $user, Card $card) {
            return
                $card->instance_id === $user->instance_id &&
                $user->hasPermissionTo('card.visit.show') &&
                $user->tokenCan('app');
        });
        Gate::define('card.visit.store', function (User $user, Card $card) {
            return
                $card->instance_id === $user->instance_id &&
                $user->hasPermissionTo('card.visit.store') &&
                $user->tokenCan('app');
        });

        // PDF
        Gate::define('pdf.card', function (User $user, Card $card) {
            return
                $card->instance_id === $user->instance_id &&
                $user->hasPermissionTo('pdf.card') &&
                ($user->tokenCan('app') || $user->tokenCan('admin'));
        });

        // Schedule
        Gate::define('schedule.shops', function (User $user) {
            return
                $user->hasPermissionTo('schedule.shops') &&
                $user->tokenCan('app');
        });
        Gate::define('schedule.reservations', function (User $user, Shop $shop) {
            return
                $shop->instance_id === $user->instance_id &&
                $shop->organization_id === $user->organization_id &&
                $user->hasPermissionTo('schedule.reservations') &&
                $user->tokenCan('app');
        });
    }
}
