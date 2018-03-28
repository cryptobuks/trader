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

Route::post('bitcoin/buy', [
	'uses'	=>	'BitcoinController@buypost',
	'as'	=>	'bitcoin.buypost'
]);

Route::get('bitcoin/sell', [
	'uses'	=>	'BitcoinController@sell',
	'as'	=>	'bitcoin.sell'
]);

Route::post('bitcoin/sell', [
	'uses'	=>	'BitcoinController@sellpost',
	'as'	=>	'bitcoin.sellpost'
]);

Route::get('profile', [
	'uses'	=>	'ProfileController@index',
	'as'	=>	'profile.index'
]);