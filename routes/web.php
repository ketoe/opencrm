<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CurrenciesController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('clients')->group(function () {
    Route::get('/', [ClientsController::class, 'index']);
    Route::get('create', [ClientsController::class, 'create']);
});

Route::prefix('admins')->group(function () {  
    Route::get('/', [AdminsController::class, 'index']);
    Route::get('payments', [PaymentsController::class, 'index']);
    Route::get('countries', [CountriesController::class, 'index']);
    Route::get('currencies', [CurrenciesController::class, 'index']);
    Route::get('users', [UsersController::class, 'create']);

    Route::prefix('payments')->group(function () {
        Route::get('create', [PaymentsController::class, 'create']);
        Route::post('store', [PaymentsController::class, 'store']);
        Route::get('show/{$id}', [PaymentsController::class, 'show']);
        Route::get('edit/{$id}', [PaymentsController::class, 'edit']);
        Route::post('update/{$id}', [PaymentsController::class, 'update']);
        Route::get('destroy/{$id}', [PaymentsController::class, 'destroy']);
    });

});