<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//All get routes.
Route::get('/', 'HomeController@showWelcome');
Route::get('addUser', 'HomeController@addUser');
Route::get('delete/{id}', 'UserController@delete');
Route::get('view/{id}', 'UserController@view');
Route::get('edit/{id}', 'UserController@edit');


//All post routes.
Route::post('addUser', 'UserController@addUser');
Route::post('update', 'UserController@update');