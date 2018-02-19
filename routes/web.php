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

//Route::get('/','SakilaContrller@index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/film/{id}','SakilaContrller@getFilmById');


Route::get('search','SearchController@search')->name('search');



Route::post('upload','ImageController@upload');//->nmae('upload');

Route::view('saveImage','saveShowImage');
Route::post('saveImage','ImageController@saveImage');

// route avatar 
Route::get('avatar',"AvatarController@vue_avatar");

Route::post('avatar',"AvatarController@store_vue_avatar");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
