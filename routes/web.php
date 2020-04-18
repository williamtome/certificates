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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'city'], function (){
    Route::get('/index', 'CityController@index')->name('city.index');
    Route::get('/create', 'CityController@create')->name('city.create');
    Route::post('/store', 'CityController@store')->name('city.store');
    Route::get('/edit/{city}', 'CityController@edit')->name('city.edit');
    Route::get('/update/{city}', 'CityController@update')->name('city.update');
});

Route::group(['prefix' => 'entity'], function (){
    Route::get('/index', 'EntityController@index')->name('entity.index');
    Route::get('/create', 'EntityController@create')->name('entity.create');
    Route::post('/store', 'EntityController@store')->name('entity.store');
    Route::get('/edit/{entity}', 'EntityController@edit')->name('entity.edit');
    Route::put('/update/{entity}', 'EntityController@update')->name('entity.update');
});
