<?php

use App\Http\Controllers\user\DashboardController;
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
Route::redirect('/dashboard', '/dashboard/user/index');

Route::prefix('user/dashboard')->name('user.')->middleware('auth')->group(function () {
    Route::resource('index', DashboardController::class);
});

require __DIR__ . '/auth.php';
