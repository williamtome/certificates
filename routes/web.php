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

Route::group(['prefix' => 'city'], function () {
    Route::get('/index', 'CityController@index')->name('city.index');
    Route::get('/create', 'CityController@create')->name('city.create');
    Route::post('/store', 'CityController@store')->name('city.store');
    Route::get('/edit/{city}', 'CityController@edit')->name('city.edit');
    Route::put('/update/{city}', 'CityController@update')->name('city.update');
    Route::get('/delete/{city}', 'CityController@destroy')->name('city.destroy');
});

Route::group(['prefix' => 'entity'], function () {
    Route::get('/index', 'EntityController@index')->name('entity.index');
    Route::get('/create', 'EntityController@create')->name('entity.create');
    Route::post('/store', 'EntityController@store')->name('entity.store');
    Route::get('/edit/{entity}', 'EntityController@edit')->name('entity.edit');
    Route::put('/update/{entity}', 'EntityController@update')->name('entity.update');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/index', 'UserController@index')->name('user.index');
    Route::get('/create', 'UserController@create')->name('user.create');
    Route::post('/store', 'UserController@store')->name('user.store');
    Route::get('/edit/{user}', 'UserController@edit')->name('user.edit');
    Route::put('/update/{user}', 'UserController@update')->name('user.update');
});

Route::group(['prefix' => 'template'], function () {
    Route::get('/index', 'TemplateController@index')->name('template.index');
    Route::get('/create', 'TemplateController@create')->name('template.create');
    Route::post('/store', 'TemplateController@store')->name('template.store');
    Route::get('/edit/{template}', 'TemplateController@edit')->name('template.edit');
    Route::put('/update/{template}', 'TemplateController@update')->name('template.update');
});
