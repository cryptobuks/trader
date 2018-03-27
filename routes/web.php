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

Route::get('/', [
	'uses'	=>	'HomeController@home',
	'as'	=>	'home.index'
]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('bitcoin', [
	'uses'	=>	'BitcoinController@index',
	'as'	=>	'bitcoin.index'
]);

Route::get('bitcoin/buy', [
	'uses'	=>	'BitcoinController@buy',
	'as'	=>	'bitcoin.buy'
]);