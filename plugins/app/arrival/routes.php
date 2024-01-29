<?php

use App\Arrival\Controllers\Arrivals;
use App\Arrival\Models\Arrival;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\EventDispatcher\Event;
use App\Arrival\Http\Controllers\ArrivalsController;
use App\Arrival\Http\Controllers\TestController;
use LibUser\Userapi\Models\User;


Route::group([
    'prefix' => 'api/v1'
], Route::group(['middleware' => 'auth']), function () {
	Route::get('arrivals', '\App\Arrival\Http\Controllers\ArrivalsController@index');
    //Route::get('arrivals', [ArrivalsController::class, 'index']);
    Route::get('arrivals/{id}', '\App\Arrival\Http\Controllers\ArrivalsController@show');
});

      
	