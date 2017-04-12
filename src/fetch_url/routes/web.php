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

Route::get('/fetch_url', 'FetchUrlController@index')->name('fetch_url');
Route::post('/fetch_url/fetch_this', 'FetchUrlController@fetch_this')->name('fetch_url.fetch_this');
