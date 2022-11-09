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

Route::get('/','WelcomeController@index');
Route::get('/public/about','WelcomeController@about');
Route::get('/portfolio','WelcomeController@portfolio');
Route::get('/package','WelcomeController@package');
Route::get('/contact','WelcomeController@contact');
