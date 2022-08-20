<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardManagerController;
use App\Http\Controllers\LimitationManagerController;
use App\Http\Controllers\LimitationSetManagerController;
use App\Http\Controllers\LineItemManagerController;
use App\Http\Controllers\OrganizationManagerController;
use App\Http\Controllers\PdfGenerationController;
use App\Http\Controllers\PersonManagerController;
use App\Http\Controllers\ProductTypeManagerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ReservationController;
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

//region Authentication
Route::controller(AuthController::class)
    ->prefix('auth')
    ->name('auth.')
    ->group(function () {
        Route::post('/login', 'login')->name('login');
        Route::post('/token', 'token')->name('token');
        Route::post('/logout', 'logout')->name('logout')->middleware('auth:sanctum');
    });
//endregion

//region Limitations
Route::middleware('auth:sanctum')
    ->controller(LimitationManagerController::class)
    ->prefix('admin/limitation/limit')
    ->name('admin.limitation.limit.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{limitation}', 'show')->name('show');
        Route::put('/{limitation}', 'update')->name('update');
        Route::delete('/{limitation}', 'destroy')->name('destroy');
    });
//endregion

//region LimitationSets
Route::middleware('auth:sanctum')
    ->controller(LimitationSetManagerController::class)
    ->prefix('admin/limitation/set')
    ->name('admin.limitation.set.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{limitationSet}', 'show')->name('show');
        Route::put('/{limitationSet}', 'update')->name('update');
        Route::delete('/{limitationSet}', 'destroy')->name('destroy');
    });
//endregion

//region Organizations
Route::middleware('auth:sanctum')
    ->controller(OrganizationManagerController::class)
    ->prefix('admin/organization')
    ->name('admin.organization.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{organization}', 'show')->name('show');
        Route::put('/{organization}', 'update')->name('update');
        Route::delete('/{organization}', 'destroy')->name('destroy');
    });
//endregion

//region ProductTypes
Route::middleware('auth:sanctum')
    ->controller(ProductTypeManagerController::class)
    ->prefix('admin/product-type')
    ->name('admin.product-type.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{productType}', 'show')->name('show');
        Route::put('/{productType}', 'update')->name('update');
        Route::delete('/{productType}', 'destroy')->name('destroy');
    });
//endregion

//region Schedule
Route::middleware('auth:sanctum')
    ->controller(ScheduleController::class)
    ->prefix('schedule')
    ->name('schedule.')
    ->group(function () {
        Route::get('/', 'shops')->name('shops');
        Route::get('/{shop}', 'today')->name('reservations');

    });
//endregion

//region Reservations
Route::middleware('auth:sanctum')
    ->controller(ReservationController::class)
    ->prefix('reservation')
    ->name('reservation.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{reservation}', 'show')->name('show');
        Route::put('/{reservation}', 'update')->name('update');
        Route::delete('/{reservation}', 'destroy')->name('destroy');
    });
//endregion

//region Shops
Route::middleware('auth:sanctum')
    ->controller(ShopManagerController::class)
    ->prefix('admin/shop')
    ->name('admin.shop.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{shop}', 'show')->name('show');
        Route::put('/{shop}', 'update')->name('update');
        Route::delete('/{shop}', 'destroy')->name('destroy');
    });
//endregion

//region Users
Route::middleware('auth:sanctum')
    ->controller(UserManagerController::class)
    ->prefix('admin/user')
    ->name('admin.user.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user}', 'destroy')->name('destroy');
    });
//endregion

//region Cards
Route::middleware('auth:sanctum')
    ->controller(CardManagerController::class)
    ->prefix('admin/card')
    ->name('admin.card.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{card}', 'show')->name('show');
        Route::put('/{card}', 'update')->name('update');
        Route::delete('/{card}', 'destroy')->name('destroy');
    });
//endregion

//region LineItems
Route::middleware('auth:sanctum')
    ->controller(LineItemManagerController::class)
    ->prefix('admin/lineItem')
    ->name('admin.lineItem.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{lineItem}', 'show')->name('show');
        Route::put('/{lineItem}', 'update')->name('update');
        Route::delete('/{lineItem}', 'destroy')->name('destroy');
    });
//endregion

//region Persons
Route::middleware('auth:sanctum')
    ->controller(PersonManagerController::class)
    ->prefix('admin/person')
    ->name('admin.person.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{person}', 'show')->name('show');
        Route::put('/{person}', 'update')->name('update');
        Route::delete('/{person}', 'destroy')->name('destroy');
    });
//endregion

//region Visits
Route::middleware('auth:sanctum')
    ->controller(VisitManagerController::class)
    ->prefix('admin/visit')
    ->name('admin.visit.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{visit}', 'show')->name('show');
        Route::put('/{visit}', 'update')->name('update');
        Route::delete('/{visit}', 'destroy')->name('destroy');
    });

//region AppVisits
Route::middleware('auth:sanctum')
    ->controller(CheckoutController::class)
    ->prefix('card/visit')
    ->name('app.card.visit.')
    ->group(function () {
        Route::get('/{card}', 'show')->name('show');
        Route::post('/{card}', 'store')->name('store');
    });
//endregion

//region PDFs
Route::middleware('auth:sanctum')
    ->controller(PdfGenerationController::class)
    ->prefix('pdf')
    ->name('pdf.')
    ->group(function () {
        Route::get('/card/{card}', 'printCard')->name('card');
    });
//endregion
