<?php

use App\Http\Controllers\VehicleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(VehicleController::class)->group(function () {

    Route::get('/vehicles', 'index')->name('vehicles');
    Route::get('/vehicles/create', 'create')->name('create');
    Route::get('/vehicles/{type}/{id}', 'show')->name('vehicle_show');


    Route::post('/vehicles/store', 'store');
    Route::post('/vehicles/update', 'update');

    Route::get('/vehicles/{id}', 'remove')->name('vehicle_remove');
    Route::delete('/vehicles', 'destroy')->name('vehicle_destroy');
});
