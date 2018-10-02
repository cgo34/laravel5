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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->namespace('V1')->group(function () {
    Auth::routes();
});


//Route::get('/register', 'V1\Auth\RegisterController@register')->name('register');

Route::get('/home', 'HomeController@index')->name('home');
