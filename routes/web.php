<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PageController@index' )->name('home');

Route::get( '/buscar' , 'PageController@search')->name('busqueda');

Route::get( '/login' , 'Auth\LoginController@showloginForm')->name('login');

Route::post( 'login' , 'Auth\LoginController@login')->name('loginpost');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('medicine', 'MedicineController');


Route::bind('medicine',function($medicine){
	return App\Medicine::find($medicine);
});