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
Route::get('/artwork', 'ArtworkController@index');                                         //进入商品列表
Route::get('/artwork/initprodcategory', 'ArtworkController@initprodcategory');             //插入分类数据
Route::get('/artwork/initproduct', 'ArtworkController@initproduct');                       //插入商品数据
Route::get('/artwork/{type}', 'ArtworkController@getClassify');                   //获得某一类商品集合

Route::get('/product/{type}/{prodid}', 'ProductController@index');

Route::post('/contact/guestinfo', 'ContactController@getGuestInfo');


