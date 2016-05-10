<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth'=> 'Auth\AuthController',
	'password'=> 'Auth\PasswordController',
	]);

  Route::get('master/currency', 'HomeController@view_Currency');

  Route::get('cronGetCurrency', 'HomeController@get_Currency');

  Route::get('master/lang', 'HomeController@view_Lang');

  Route::get('cronGetLang', 'HomeController@get_Lang');

  Route::get('master/country', 'HomeController@view_Country');

  Route::get('cronGetCountry', 'HomeController@get_Country');

  Route::get('master/airport', 'HomeController@view_Airport');

  Route::get('cronGetAirport', 'HomeController@get_Airport');

  Route::get('airline/flight', ['as'=>'airline/flight',
                                    'uses'=>'Reservasi@flight']);
