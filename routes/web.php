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

Route::get('/', 'IndexController@index')->name('main');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
Route::get('/topics/{id}', 'TopicController@show')->name('topics.show');
Route::get('/results/{id}', 'ResultController@show')->name('results.show');
Route::post('/results', 'ResultController@store')->name('results.store');
