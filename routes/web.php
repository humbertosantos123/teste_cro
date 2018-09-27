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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Movie Routes
Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/create', 'MovieController@create')->name('movies.create');
Route::post('/movies', 'MovieController@store')->name('movies.store');
Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
Route::post('/movies/{movie}', 'MovieController@update')->name('movies.update');
Route::put('/movies/{movie}', 'MovieController@update')->name('movies.update');

//Directors Routes
Route::get('/directors', 'DirectorController@index')->name('directors.index');
Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
Route::post('/directors', 'DirectorController@store')->name('directors.store');
Route::get('/directors/{director}/edit', 'DirectorController@edit')->name('directors.edit');
Route::get('/directors/{director}', 'DirectorController@show')->name('directors.show');
Route::post('/directors/{director}', 'DirectorController@update')->name('directors.update');
Route::put('/directors/{director}', 'DirectorController@update')->name('directors.update');

//logOut
Route::get('/logout', 'LogoutController@logout')->name('logout');
