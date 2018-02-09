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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('admin/cities', 'CityController@index')->name('cities.index');
//Route::get('admin/cities/create', 'CityController@create')->name('cities.create');
Route::post('admin/cities', 'CityController@store')->name('cities.store');
//Route::get('admin/cities/{city}', 'CityController@show')->name('cities.show');
Route::post('admin/cities/{city}/edit', 'CityController@update')->name('cities.update');
Route::get('admin/cities/{city}/destroy', 'CityController@destroy')->name('cities.destroy');



Route::get('admin/espaces', 'EspacesController@index');
