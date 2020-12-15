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

Route::get('/', 'HomeController@dashboard');

Route::get('/login', 'HomeController@getLogin');

Route::get('/register' , 'HomeController@getRegister');

Route::post('/postLogin', 'HomeController@postLogin');

Route::post('/postRegister', 'HomeController@postRegister');

Route::get('/logout', 'HomeController@logout');

Route::get('/guest', function()
{
  return view('guest_dashboard');
});

Route::get('/authed', function(){
  return view('auth_dashboard');
});
