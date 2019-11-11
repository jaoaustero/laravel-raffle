<?php

use Illuminate\Http\Request;

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

Route::post('register', 'API\RaffleManagementController@register');
Route::post('save-winner', 'API\RaffleManagementController@saveWinner');

Route::group(['prefix' => 'administration'], function()
{
    Route::get('events', 'API\Administration\EventController@index')->name('admin-events.index');
    Route::group(['prefix' => 'event'], function()
    {
        Route::post('', 'API\Administration\EventController@store')->name('admin-events.store');
        Route::put('{id}/update', 'API\Administration\EventController@update')->name('admin-events.update');
        Route::get('{id}/edit', 'API\Administration\EventController@edit')->name('admin-events.update');
        Route::delete('{id}/delete', 'API\Administration\EventController@destroy')->name('admin-events.destroy');

        Route::get('{id}/change-active', 'API\Administration\EventController@changeActive')->name('admin-events.update');
    });

    Route::get('players', 'API\Administration\PlayerController@index')->name('admin-players.index');

});


Route::fallback(function(){
    return abort(404);
});