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
Route::get('/', function () {
    return view('auth.login');
});

// Event Details
Route::get('/{event}', function () {
    return view('events.details');
});

// Event registration
Route::get('/{event}/registration', function () {
    return view('events.register');
});


Route::get('/spinner', function () {
    return view('spinner.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
