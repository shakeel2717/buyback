<?php

use App\Http\Controllers\user\CustomerController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\DeviceBrandController;
use App\Http\Controllers\user\DeviceCategoryController;
use App\Http\Controllers\user\DeviceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');
Route::redirect('/dashboard', '/user/dashboard/index');

Route::prefix('user/dashboard')->name('user.')->middleware('auth')->group(function () {
    Route::resource('index', DashboardController::class);
    Route::resource('customer', CustomerController::class);
    Route::prefix('device')->name('device.')->group(function () {
        Route::resource('device', DeviceController::class);
        Route::resource('brand', DeviceBrandController::class);
        Route::resource('category', DeviceCategoryController::class);
    });
});

require __DIR__ . '/auth.php';
