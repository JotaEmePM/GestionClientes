<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
		'uses'  =>  'HomeAdminController@index',
		'as'	=>	'home'
]);


route::get('auth/login', [
    'uses'  =>  'Auth\AuthController@getLogin',
    'as'    =>  'auth.login'
]);

route::post('auth/login', [
    'uses'  =>  'Auth\AuthController@postLogin',
    'as'    =>  'auth.login'
]);

route::get('auth/logout', [
    'uses'  =>  'Auth\AuthController@getLogout',
    'as'    =>  'auth.logout'
]);

Route::group(['prefix' => 'admin'], function() {

	Route::get('/',[
			'uses'	=> 	'HomeAdminController@index2',
			'as'	=>	'admin.home.index',
			'middleware' => 'auth'
	]);

	Route::resource('users','UsersController',['middleware' => 'auth']);
	Route::get('users/{id}/destroy',[
			'uses' 	=> 	'UsersController@destroy',
			'as'	=>	'admin.users.destroy',
			'middleware' => 'auth'
		]);

    Route::resource('proyectos','ProyectosController',['middleware' => 'auth']);

    Route::resource('clientes','ClientesController', ['middleware' => 'auth']);
	Route::get('clientes/{id}/destroy',[
			'uses' 	=> 	'ClientesController@destroy',
			'as'	=>	'admin.clientes.destroy',
			'middleware' => 'auth'
	]);

});

