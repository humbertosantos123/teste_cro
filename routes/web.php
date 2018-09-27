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

$router->group( [
    'prefix'     => 'movies',
    'as'         => 'movies.',
    'middleware' => [ 'web' ]
],
    function ( \Illuminate\Routing\Router $router ) {

        $router->get( '/', [
            'as'   => 'index',
            'uses' => 'MovieController@index',
        ] );

        $router->post( '/', [
            'as'   => 'store',
            'uses' => 'MovieController@store',
        ] );

        $router->get( 'create', [
            'as'   => 'create',
            'uses' => 'MovieController@create',
        ] );

        $router->get( '{movie}/edit', [
            'as'   => 'edit',
            'uses' => 'MovieController@edit',
        ] );

        $router->get( '{movie}', [
            'as'   => 'show',
            'uses' => 'MovieController@show',
        ] );

        $router->put( '{movie}', [
            'as'   => 'update',
            'uses' => 'MovieController@update',
        ] );

    }
);

$router->group( [
    'prefix'     => 'directors',
    'as'         => 'directors.',
    'middleware' => [ 'web' ]
],
    function ( \Illuminate\Routing\Router $router ) {

        $router->get( '/', [
            'as'   => 'index',
            'uses' => 'DirectorController@index',
        ] );

        $router->post( '/', [
            'as'   => 'store',
            'uses' => 'DirectorController@store',
        ] );

        $router->get( 'create', [
            'as'   => 'create',
            'uses' => 'DirectorController@create',
        ] );

        $router->get( '{director}/edit', [
            'as'   => 'edit',
            'uses' => 'DirectorController@edit',
        ] );

        $router->get( '{director}', [
            'as'   => 'show',
            'uses' => 'DirectorController@show',
        ] );

        $router->put( '{director}', [
            'as'   => 'update',
            'uses' => 'DirectorController@update',
        ] );

    }
);

$router->group( [
    'prefix'     => 'address',
    'as'         => 'address.',
    'middleware' => [ 'web' ]
],
    function ( \Illuminate\Routing\Router $router ) {

        $router->get( '/', [
            'as'   => 'index',
            'uses' => 'AddressController@index',
        ] );

        $router->post( 'register', [
            'as'   => 'register',
            'uses' => 'AddressController@registerAddress',
        ] );

        $router->get( '{address}/edit', [
            'as'   => 'edit',
            'uses' => 'AddressController@edit',
        ] );

        $router->get( '{address}', [
            'as'   => 'show',
            'uses' => 'AddressController@show',
        ] );

        $router->put( '{address}', [
            'as'   => 'update',
            'uses' => 'AddressController@update',
        ] );

    }
);
//Movie Routes
//Route::get('/movies', 'MovieController@index')->name('movies.index');
//Route::get('/movies/create', 'MovieController@create')->name('movies.create');
//Route::post('/movies', 'MovieController@store')->name('movies.store');
//Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
//Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
//Route::post('/movies/{movie}', 'MovieController@update')->name('movies.update');
//Route::put('/movies/{movie}', 'MovieController@update')->name('movies.update');

//Directors Routes
//Route::get('/directors', 'DirectorController@index')->name('directors.index');
//Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
//Route::post('/directors', 'DirectorController@store')->name('directors.store');
//Route::get('/directors/{director}/edit', 'DirectorController@edit')->name('directors.edit');
//Route::get('/directors/{director}', 'DirectorController@show')->name('directors.show');
//Route::post('/directors/{director}', 'DirectorController@update')->name('directors.update');
//Route::put('/directors/{director}', 'DirectorController@update')->name('directors.update');

//logOut
Route::get('/logout', 'LogoutController@logout')->name('logout');
