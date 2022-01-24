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
Route::get('/comics/{comic}', 'PageController@show')->name('show');

Route::get('/admin/comics', 'Admin\ComicController@index')->name('admin.comics.index');
Route::get('/admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('/admin/comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('/admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comics.show');
Route::get('/admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');
Route::put('/admin/comics/{comic}', 'Admin\ComicController@update')->name('admin.comics.update');
Route::delete('/admin/comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comics.destroy');

/* ADMIN */
Route::get('/admin', function () {

    return view('admin.dashboard');
})->name('admin.dashboard');

/* Movies */
Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');

/* Admin Movies */
Route::get('admin/movies', 'Admin\MovieController@index')->name('admin.movies.index');
Route::get('admin/movies/create', 'Admin\MovieController@create')->name('admin.movies.create');
Route::post('admin/movies', 'Admin\MovieController@store')->name('admin.movies.store');
Route::get('admin/movies/{movie}', 'Admin\MovieController@show')->name('admin.movies.show');
Route::get('admin/movies/{movie}/edit', 'Admin\MovieController@edit')->name('admin.movies.edit');
Route::put('admin/movies/{movie}', 'Admin\MovieController@update')->name('admin.movies.update');
Route::delete('admin/movies/{movie}', 'Admin\MovieController@destroy')->name('admin.movies.destroy');
