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

Route::get('logs', 'LogsController@index');

Route::get('logs/create', 'LogsController@create');

Route::get('logs/{id}', 'LogsController@show');

Route::post('logs', 'LogsController@store');

Route::controllers([
  'auth' => 'Auth\AuthController', 
  'password' => 'Auth\PasswordController',
  ]);
