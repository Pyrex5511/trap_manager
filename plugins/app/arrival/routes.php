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
], function () {
        Route::group(['middleware' => 'auth'], function () {
	        Route::get('users', '\App\Arrival\Http\Controllers\ArrivalsController@index');
            //Route::get('arrivals', [ArrivalsController::class, 'index']);
            Route::get('users/{id}', '\App\Arrival\Http\Controllers\ArrivalsController@show');
            Route::post('arrival', '\App\Arrival\Http\Controllers\ArrivalsController@save');
        });
});

      
	