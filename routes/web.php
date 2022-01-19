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

Route::get('/', 'PageController@home')->name('home');
Route::get('/comics', 'PageController@index')->name('comics');

Route::get('/admin/comics', 'Admin\ComicController@index')->name('admin.comics.index');
