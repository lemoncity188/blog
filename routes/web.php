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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');
Route::get('/artwork', 'ArtworkController@index');
Route::post('/artwork/sort/{type}', 'ArtworkController@getsort');
Route::post('/artwork/initprodcategory', 'ArtworkController@initprodcategory');
Route::post('/artwork/initproduct', 'ArtworkController@initproduct');