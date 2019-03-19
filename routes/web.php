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

// Parts
Route::get('/parts', 'PartsController@index');
Route::get('/parts/create/{id}', 'PartsController@create')->name("parts.create");

Route::get('/hello/random/{length?}', ['uses' => 'Hello@random']);
Route::get('/hello/flash/{message}', ['uses' => 'Hello@flash']);
Route::get('/hello/component', 'Hello@component');
Route::get('/hello/download', 'Hello@download')->name('hello.download');

Route::get('crypto', ['uses' => 'Crypto@index']);
Route::get('crypto/random', ['uses' => 'Crypto@random']);

Route::get('/hello/partial/one', function() {
	return view('one');
});

Route::get('/hello/partial/two', function() {
	return view('partials/two');
});

Route::get('/hello/{name?}', ['uses' => 'Hello@index']);
Route::get('/second', ['uses' => 'Second']);
Route::get('/second/view', function () {
    return view('greeting', ['name' => 'James']);
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
