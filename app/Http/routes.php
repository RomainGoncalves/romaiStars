<?php

use App\Places;

Route::get('/', function () {

//    Auth::logout();
    $places = Places::all();

//    foreach($places as $place){
//        var_dump($place->name);
//
//    }
    return view('places/add')->with('places', $places);
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