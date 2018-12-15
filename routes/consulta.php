<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

// ROUTES

Route::get('user/index', [
		'as'	=> 'consulta.user.index',
		'uses'	=> 'userController@index',	
	]);

Route::get('datauser/edit/{id}', [
		'as'	=> 'consulta.datauser.edit',
		'uses'	=> 'dataUserController@edit',	
	]);

Route::put('datauser/update', [
		'as'	=> 'consulta.datauser.update',
		'uses'	=> 'DataUserController@update',	
	]);

Route::get('datauser/show/{id}', [
		'as'	=> 'consulta.datauser.show',
		'uses'	=> 'DataUserController@show',	
	]);
