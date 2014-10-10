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

Route::get('/', 'PostsController@index');


Route::resource('sessions', 'SessionsController');

Route::get('login', 'SessionsController@create');


Route::group(array('before' => 'auth'), function()
{

  Route::resource('posts', 'PostsController');

  Route::get('/dashboard', function()
  {
    return View::make('dashboard');
  });


});
