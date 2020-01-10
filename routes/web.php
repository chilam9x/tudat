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

Route::get('/', 'HomeController@index')->name('home');
Route::get('create', 'HomeController@create')->name('create');
Route::post('post-create', 'HomeController@postCreate')->name('postCreate');

Route::get('production-plan', 'HomeController@productionPlan')->name('productionPlan');
Route::get('general', 'HomeController@general')->name('general');
