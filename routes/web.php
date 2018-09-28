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
            'as'   => 'register',
            'uses' => 'MovieController@register',
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

        $router->put( '{movie}/delete', [
            'as'   => 'delete',
            'uses' => 'MovieController@delete',
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
            'as'   => 'register',
            'uses' => 'DirectorController@register',
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

        $router->put( '{director}/delete', [
            'as'   => 'delete',
            'uses' => 'DirectorController@delete',
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

        $router->get( 'create', [
            'as'   => 'create',
            'uses' => 'AddressController@create',
        ] );

        $router->post( 'register', [
            'as'   => 'register',
            'uses' => 'AddressController@register',
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

        $router->put( '{address}/delete', [
            'as'   => 'delete',
            'uses' => 'AddressController@delete',
        ] );

    }
);

$router->group( [
    'prefix'     => 'user',
    'as'         => 'user.',
    'middleware' => [ 'web' ]
],
    function ( \Illuminate\Routing\Router $router ) {

        $router->get( '/', [
            'as'   => 'index',
            'uses' => 'UserController@index',
        ] );

        $router->get( '{user}/edit', [
            'as'   => 'edit',
            'uses' => 'UserController@edit',
        ] );

        $router->get( '{user}', [
            'as'   => 'show',
            'uses' => 'UserController@show',
        ] );

        $router->put( '{user}', [
            'as'   => 'update',
            'uses' => 'UserController@update',
        ] );

        $router->put( '{user}/delete', [
            'as'   => 'delete',
            'uses' => 'UserController@delete',
        ] );

    }
);

//logOut
Route::get('/logout', 'LogoutController@logout')->name('logout');
