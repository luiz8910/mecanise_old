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

    /**
     * Dashboard
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::get('/home', 'HomeController@index');

    /**
     * Crud Usuários
     */
    Route::get('/usuarios', 'PersonController@index')->name('person.index');

    Route::get('/criar-usuario', 'PersonController@create')->name('person.create');

    Route::get('/editar-usuario/{id}', 'PersonController@edit')->name('person.edit');

    Route::post('/person', 'PersonController@store')->name('person.store');

    Route::put('/person/{id}', 'PersonController@update')->name('person.update');

    Route::delete('/delete-person/{id}', 'PersonController@delete');

    /**
     * Crud Veículos
     */
    Route::get('/veiculos', 'VehicleController@index')->name('vehicle.index');

    Route::get('/criar-veiculo', 'VehicleController@create')->name('vehicle.create');

    Route::get('/editar-veiculo/{id}', 'VehicleController@edit')->name('vehicle.edit');

    Route::post('/vehicle', 'VehicleController@store')->name('vehicle.store');

    Route::put('/vehicle/{id}', 'VehicleController@update')->name('vehicle.update');

    Route::delete('/delete-vehicle/{id}', 'VehicleController@delete');

    Route::get('/vehicle_by_owner/{id}', 'VehicleController@vehicle_by_owner')->name('vehicle.by.owner');


});

Auth::routes();


