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

Route::get('/data', 'DataController@index');

Route::get('/data/export', 'DataController@export');

Route::get('/data/delete/{id}','DataController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
