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


Route::get('/login', 'Auth\LoginController@login_page')->name('login');

Route::post('/do_login', 'Auth\LoginController@login')->name('login.post');

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', 'HomeController@index')->name('home.index');

    Route::get('/home', 'HomeController@index');

    Route::get('/usuarios', 'PersonController@index')->name('person.index');

});

Auth::routes();


