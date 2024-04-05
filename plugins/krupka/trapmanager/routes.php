<?php


use Illuminate\Support\Facades\Route;
use LibUser\Userapi\Models\User;



Route::group([
    'prefix' => 'api/v1'
], function () {
        
	    Route::get('traps', '\Krupka\TrapManager\Http\Controllers\TrapsController@index');
        Route::get('traps/{id}', '\Krupka\TrapManager\Http\Controllers\TrapsController@show');
        Route::group(['middleware' => 'auth'], function () {
            Route::post('trap/{id}', 'Krupka\TrapManager\Http\Controllers\TrapsController@edit');
        });
});

      
	