<?php

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

// Login page
Route::get('/', function ()
{
    if(Auth::check())
      return redirect('/events');

    return redirect('/login');
});

Auth::routes();

// Auth
Route::get('login', 'Auth\LoginController@index');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('logout', 'Auth\LogoutController@logout');

Route::group(['middleware' => ['auth']], function()
{
    Route::get('events', 'Administration\EventController@index');

    Route::get('events/{slug}', 'Administration\EventController@view');

    Route::get('events/{slug}/spinner', 'Administration\EventController@viewSpinner');

    Route::get('users', 'Administration\UserController@index');

    Route::get('settings', 'Administration\SettingsController@index');

    Route::post('setting/update-fullname', 'SettingController@updateFullname');
    Route::post('setting/update-email', 'SettingController@updateEmail');
    Route::post('setting/change-password', 'SettingController@changePassword');
});

// Event Details
Route::get('{slug}', 'EventController@view');

// Event registration
Route::get('{slug}/registration', 'EventController@registration');

Route::fallback(function(){ return abort(404); });
