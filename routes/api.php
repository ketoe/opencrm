<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\CalendersController;
use App\Http\Controllers\api\ClientsController;
use App\Http\Controllers\api\CountriesController;
use App\Http\Controllers\api\CurrenciesController;
use App\Http\Controllers\api\MessagesController;
use App\Http\Controllers\api\NotesController;
use App\Http\Controllers\api\OrdersController;
use App\Http\Controllers\api\PaymentsController;
use App\Http\Controllers\api\UsersController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('calenders', CalendersController::class);
Route::resource('clients', ClientsController::class);
Route::resource('countries', CountriesController::class);
Route::resource('currencies', CurrenciesController::class);
Route::resource('messages', MessagesController::class);
Route::resource('notes', NotesController::class);
Route::resource('orders', OrdersController::class);
Route::resource('payments', PaymentsController::class);
Route::resource('users', UsersController::class);

if (Auth::check())
{
    Route::get('/users/showAuth', [UsersController::class, 'showAuth']);
}