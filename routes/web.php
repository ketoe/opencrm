<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CurrenciesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\NotesClientsController;
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



Route::middleware(['auth'])->group(function () {
    Route::get('/user/logout', [UsersController::class, 'logout']);
    Route::prefix('clients')->group(function () {
        Route::get('/', [ClientsController::class, 'index']);
        Route::get('create', [ClientsController::class, 'create']);
        Route::post('store', [ClientsController::class, 'store']);
        Route::get('{id}', [ClientsController::class, 'show']);
        Route::get('edit/{id}', [ClientsController::class, 'edit']);
        Route::post('update/{id}', [ClientsController::class, 'update']);
    });
    Route::prefix('notesClients')->group(function () {
        Route::get('create/{id}', [NotesClientsController::class, 'create']);
        Route::post('store/{id}', [NotesClientsController::class, 'store']);
        Route::post('update/{id}', [NotesClientsController::class, 'update']);
        Route::get('edit/{id}', [NotesClientsController::class, 'edit']);
        Route::get('delete/{id}', [NotesClientsController::class, 'delete']);

    });
    Route::prefix('admins')->group(function () {  
        Route::get('/', [AdminsController::class, 'index']);
        Route::get('payments', [PaymentsController::class, 'index']);
        Route::get('countries', [CountriesController::class, 'index']);
        Route::get('currencies', [CurrenciesController::class, 'index']);
        Route::get('users', [UsersController::class, 'index']);
    
        Route::prefix('payments')->group(function () {
            Route::get('create', [PaymentsController::class, 'create']);
            Route::post('store', [PaymentsController::class, 'store']);
            Route::get('edit/{id}', [PaymentsController::class, 'edit']);
            Route::post('update/{id}', [PaymentsController::class, 'update']);
        });
    
        Route::prefix('countries')->group(function () {
            Route::get('create', [CountriesController::class, 'create']);
            Route::post('store', [CountriesController::class, 'store']);
            Route::get('edit/{id}', [CountriesController::class, 'edit']);
            Route::post('update/{id}', [CountriesController::class, 'update']);
        });
    
        Route::prefix('currencies')->group(function () {
            Route::get('create', [CurrenciesController::class, 'create']);
            Route::post('store', [CurrenciesController::class, 'store']);
            Route::get('edit/{id}', [CurrenciesController::class, 'edit']);
            Route::post('update/{id}', [CurrenciesController::class, 'update']);
        });
    
        Route::prefix('users')->group(function () {
            Route::get('create', [UsersController::class, 'create']);
            Route::post('store', [UsersController::class, 'store']);
            Route::get('edit/{id}', [UsersController::class, 'edit']);
            Route::post('update/{id}', [UsersController::class, 'update']);
        });

    
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
