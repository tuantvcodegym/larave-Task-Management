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
Route::get('/list', 'TaskController@index')->name('list');

Route::get('/create', 'TaskController@create')->name('create');
Route::post('/create', 'TaskController@edit')->name('edit');

Route::get('{id}/store', 'TaskController@store')->name('store');
Route::post('{id}/store', 'TaskController@update')->name('update');

Route::get('{id}/delete', 'TaskController@delete')->name('delete');
