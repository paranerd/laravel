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

Route::get('/hello/random/{length?}', ['uses' => 'Hello@random']);
Route::get('/hello/flash/{message}', ['uses' => 'Hello@flash']);

Route::get('/hello/{name?}', ['uses' => 'Hello@index']);
Route::get('/second', ['uses' => 'Second']);
Route::get('/second/view', function () {
    return view('greeting', ['name' => 'James']);
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
