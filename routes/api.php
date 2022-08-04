<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LimitationManagerController;
use App\Http\Controllers\LimitationSetManagerController;
use App\Http\Controllers\OrganizationManagerController;
use App\Http\Controllers\ProductTypeManagerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShopManagerController;
use App\Http\Controllers\UserManagerController;
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
    ->prefix('admin/limitation/limits')
    ->name('admin.limitation.limits.')
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
    ->prefix('admin/limitation/sets')
    ->name('admin.limitation.sets.')
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
    ->prefix('admin/product-types')
    ->name('admin.product-types.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{productType}', 'show')->name('show');
        Route::put('/{productType}', 'update')->name('update');
        Route::delete('/{productType}', 'destroy')->name('destroy');
    });
//endregion

//region Reservations
Route::middleware('auth:sanctum')
    ->controller(ReservationController::class)
    ->prefix('reservations')
    ->name('reservations.')
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
