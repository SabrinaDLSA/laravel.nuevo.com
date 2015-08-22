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

Route::get('/',[
  'as' => 'home',
  'uses' => 'WelcomeController@index'
  ]);
  Route::get('/home','WelcomeController@index');
  
  Route::get('/logout', [
      'as' => 'logout',
      'uses' => 'UserController@logout'
    ]);
    Route::get('usersite',[
      'as'=> 'usersite',
      'uses' => 'UserController@usersite'
      ]);
Route::get('/series/{slug}', 'SeriesController@index');


// Authentication routes...
Route::get('auth/login',[
  'as' => 'login',
  'uses' =>  'Auth\AuthController@getLogin']);
Route::post('auth/login',[
  'as' => 'login',
  'uses' =>  'Auth\AuthController@postLogin']);
Route::get('auth/logout',[
  'as' => 'logout',
  'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', [
  'as' => 'register',
  'uses' => 'Auth\AuthController@getRegister'
  ]);
Route::post('auth/register', [
'as' => 'registerin',
'uses' => 'Auth\AuthController@postRegister'
]);
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
