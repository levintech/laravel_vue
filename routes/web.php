<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artists', 'ArtistsController@index')->name('artists');
Route::get('/tubidy', 'TubidyController@index')->name('tubidy');
Route::get('/result/{title}', 'DynamicController@index')->name('result');
