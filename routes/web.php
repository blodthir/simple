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

Route::get('/','StaticPageController@home');
Route::get('/findresult','StaticPageController@findresult');
Route::get('/pathshow','StaticPageController@pathshow');
Route::get('/wikishow','StaticPageController@wikishow');
Route::get('signup','UsersController@create')->name('signup');
