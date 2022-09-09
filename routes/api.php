<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardManagerController;
use App\Http\Controllers\LimitationManagerController;
use App\Http\Controllers\LimitationSetManagerController;
use App\Http\Controllers\LineItemManagerController;
use App\Http\Controllers\OrganizationManagerController;
use App\Http\Controllers\PasswordForgottenController;
use App\Http\Controllers\PdfGenerationController;
use App\Http\Controllers\PersonManagerController;
use App\Http\Controllers\ProductTypeManagerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ReservationManagerController;
use App\Http\Controllers\ShopManagerController;
use App\Http\Controllers\UserManagerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\VisitManagerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//region Handshake
Route::get('/handshake', [AuthController::class, 'handshake'])
    ->name('auth.handshake')
    ->middleware('web');
//endregion

//region Password forgotten
Route::controller(PasswordForgottenController::class)
    ->prefix('password')
    ->name('password.')
    ->group(function () {
        Route::post('/forgot', 'forgot')->name('forgot');
        Route::post('/reset', 'reset')->name('reset');
    });
//endregion

//region Authentication
Route::controller(AuthController::class)
    ->prefix('auth')
    ->name('auth.')
    ->group(function () {
        Route::post('/login', 'login')->name('login');
        Route::post('/token', 'token')->name('token');
        Route::post('/logout', 'logout')->name('logout')->middleware('auth:sanctum');
        Route::get('/heartbeat', 'heartbeat')->name('heartbeat')->middleware('auth:sanctum');
    });
//endregion

//region Limitations
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(LimitationManagerController::class)
    ->prefix('admin/limitation/limit')
    ->name('admin.limitation.limit.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.limitation.limit.index');
        Route::post('/', 'store')->name('store')->can('admin.limitation.limit.store');
        Route::get('/{limitation}', 'show')->name('show')->can('admin.limitation.limit.show', 'limitation');
        Route::put('/{limitation}', 'update')->name('update')->can('admin.limitation.limit.update', 'limitation');
        Route::delete('/{limitation}', 'destroy')->name('destroy')->can('admin.limitation.limit.destroy', 'limitation');
    });
//endregion

//region LimitationSets
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(LimitationSetManagerController::class)
    ->prefix('admin/limitation/set')
    ->name('admin.limitation.set.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.limitation.set.index');
        Route::post('/', 'store')->name('store')->can('admin.limitation.set.store');
        Route::get('/{limitationSet}', 'show')->name('show')->can('admin.limitation.set.show', 'limitationSet');
        Route::put('/{limitationSet}', 'update')->name('update')->can('admin.limitation.set.update', 'limitationSet');
        Route::delete('/{limitationSet}', 'destroy')->name('destroy')->can('admin.limitation.set.destroy', 'limitationSet');
    });
//endregion

//region Organizations
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(OrganizationManagerController::class)
    ->prefix('admin/organization')
    ->name('admin.organization.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.organization.index');
        Route::post('/', 'store')->name('store')->can('admin.organization.store');
        Route::get('/{organization}', 'show')->name('show')->can('admin.organization.show', 'organization');
        Route::put('/{organization}', 'update')->name('update')->can('admin.organization.update', 'organization');
        Route::delete('/{organization}', 'destroy')->name('destroy')->can('admin.organization.destroy', 'organization');
    });
//endregion

//region ProductTypes
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(ProductTypeManagerController::class)
    ->prefix('admin/product-type')
    ->name('admin.product-type.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.product-type.index');
        Route::post('/', 'store')->name('store')->can('admin.product-type.store');
        Route::get('/{productType}', 'show')->name('show')->can('admin.product-type.show', 'productType');
        Route::put('/{productType}', 'update')->name('update')->can('admin.product-type.update', 'productType');
        Route::delete('/{productType}', 'destroy')->name('destroy')->can('admin.product-type.destroy', 'productType');
    });
//endregion

//region Schedule
Route::middleware(['auth:sanctum', 'ability:app'])
    ->controller(ScheduleController::class)
    ->prefix('schedule')
    ->name('schedule.')
    ->group(function () {
        Route::get('/', 'shops')->name('shops')->can('schedule.shops');
        Route::get('/{shop}', 'today')->name('reservations')->can('schedule.reservations', 'shop');

    });
//endregion

//region Reservations
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(ReservationManagerController::class)
    ->prefix('admin/reservation')
    ->name('admin.reservation.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.reservation.index');
        Route::post('/', 'store')->name('store')->can('admin.reservation.store');
        Route::get('/{reservation}', 'show')->name('show')->can('admin.reservation.show', 'reservation');
        Route::put('/{reservation}', 'update')->name('update')->can('admin.reservation.update', 'reservation');
        Route::delete('/{reservation}', 'destroy')->name('destroy')->can('admin.reservation.destroy', 'reservation');
    });
//endregion

//region Shops
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(ShopManagerController::class)
    ->prefix('admin/shop')
    ->name('admin.shop.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.shop.index');
        Route::post('/', 'store')->name('store')->can('admin.shop.store');
        Route::get('/{shop}', 'show')->name('show')->can('admin.shop.show', 'shop');
        Route::put('/{shop}', 'update')->name('update')->can('admin.shop.update', 'shop');
        Route::delete('/{shop}', 'destroy')->name('destroy')->can('admin.shop.destroy', 'shop');
    });
//endregion

//region Users
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(UserManagerController::class)
    ->prefix('admin/user')
    ->name('admin.user.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.user.index');
        Route::post('/', 'store')->name('store')->can('admin.user.store');
        Route::get('/{user}', 'show')->name('show')->can('admin.user.show', 'user');
        Route::put('/{user}', 'update')->name('update')->can('admin.user.update', 'user');
        Route::delete('/{user}', 'destroy')->name('destroy')->can('admin.user.destroy', 'user');
    });
//endregion

//region Cards
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(CardManagerController::class)
    ->prefix('admin/card')
    ->name('admin.card.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.card.index');
        Route::post('/', 'store')->name('store')->can('admin.card.store');
        Route::get('/{card}', 'show')->name('show')->can('admin.card.show', 'card');
        Route::put('/{card}', 'update')->name('update')->can('admin.card.update', 'card');
        Route::delete('/{card}', 'destroy')->name('destroy')->can('admin.card.destroy', 'card');
    });
//endregion

//region LineItems
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(LineItemManagerController::class)
    ->prefix('admin/lineItem')
    ->name('admin.lineItem.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.lineItem.index');
        Route::post('/', 'store')->name('store')->can('admin.lineItem.store');
        Route::get('/{lineItem}', 'show')->name('show')->can('admin.lineItem.show', 'lineItem');
        Route::put('/{lineItem}', 'update')->name('update')->can('admin.lineItem.update', 'lineItem');
        Route::delete('/{lineItem}', 'destroy')->name('destroy')->can('admin.lineItem.destroy', 'lineItem');
    });
//endregion

//region Persons
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(PersonManagerController::class)
    ->prefix('admin/person')
    ->name('admin.person.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.person.index');
        Route::post('/', 'store')->name('store')->can('admin.person.store');
        Route::get('/{person}', 'show')->name('show')->can('admin.person.show', 'person');
        Route::put('/{person}', 'update')->name('update')->can('admin.person.update', 'person');
        Route::delete('/{person}', 'destroy')->name('destroy')->can('admin.person.destroy', 'person');
    });
//endregion

//region Visits
Route::middleware(['auth:sanctum', 'ability:admin'])
    ->controller(VisitManagerController::class)
    ->prefix('admin/visit')
    ->name('admin.visit.')
    ->group(function () {
        Route::get('/', 'index')->name('index')->can('admin.visit.index');
        Route::post('/', 'store')->name('store')->can('admin.visit.store');
        Route::get('/{visit}', 'show')->name('show')->can('admin.visit.show', 'visit');
        Route::put('/{visit}', 'update')->name('update')->can('admin.visit.update', 'visit');
        Route::delete('/{visit}', 'destroy')->name('destroy')->can('admin.visit.destroy', 'visit');
    });

//region Checkout
Route::middleware(['auth:sanctum', 'ability:app'])
    ->controller(CheckoutController::class)
    ->prefix('card/visit')
    ->name('card.visit.')
    ->group(function () {
        Route::get('/{card}', 'show')->name('show')->can('card.visit.show', 'card');
        Route::post('/{card}', 'store')->name('store')->can('card.visit.store', 'card');
        Route::post('/{card}/comment', 'comment')->name('comment')->can('card.visit.store', 'card');
    });
//endregion

//region PDFs
Route::middleware(['auth:sanctum', 'ability:app'])
    ->controller(PdfGenerationController::class)
    ->prefix('pdf')
    ->name('pdf.')
    ->group(function () {
        Route::get('/card/{card}', 'printCard')->name('card')->can('pdf.card', 'card');
    });
//endregion
