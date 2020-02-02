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
    return view('./auth/login');
});




Route::get('/home', 'Boissons@index')->name('home');
Route::resource('boissons', 'Boissons');
Route::resource('commandes', 'Commandes');
Route::resource('history', 'History');
Route::resource('contact', 'Contact');

Auth::routes();