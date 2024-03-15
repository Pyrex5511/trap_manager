<?php


use Illuminate\Support\Facades\Route;




Route::group([
    'prefix' => 'api/v1'
], function () {
        
	    Route::get('traps', '\Krupka\TrapManager\Http\Controllers\TrapsController@index');
        Route::get('traps/{id}', '\Krupka\TrapManager\Http\Controllers\TrapsController@show');
        Route::group(['middleware' => 'auth'], function () {
            Route::post('trap', 'Krupka\TrapManager\Http\Controllers\TrapsController@save');
            Route::post('trap/{id}', 'Krupka\TrapManager\Http\Controllers\TrapsController@edit');
        });
});

      
	