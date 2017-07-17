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

// ----- Public Routes -----

Route::get('/', 'Publico\HomeController@home');

Route::get('/login',['as'=>'login','uses'=>'LoginController@login']);
Route::post('/login-post',['as'=>'login-post','uses'=>'LoginController@login_post']);
