<?php

use App\Place;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('login', function(){
//    return view('login');
//});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

resource('places', 'PlacesController');