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
Route::group(['prefix'=>'page'], function(){
  Route::get('/about', 'PageController@aboutus')->name('about');
  Route::get('/webdesign', 'PageController@webdesign')->name('services.webdesign');

});

//Route::get('/', 'PageController@index');

Route::get('/', 'QuoteController@index');
