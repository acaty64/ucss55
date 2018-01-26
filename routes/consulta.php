<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

// ROUTES

Route::get('user/index', [
		'as'	=> 'consulta.user.index',
		'uses'	=> 'Admin\userController@index',	
	])->middleware(Authorize::class.':is_consulta,'.Acceso::class);

Route::get('datauser/edit/{id}', [
		'as'	=> 'consulta.datauser.edit',
		'uses'	=> 'Admin\dataUserController@edit',	
	])->middleware(Authorize::class.':is_consulta,'.Acceso::class);

Route::put('datauser/update', [
		'as'	=> 'consulta.datauser.update',
		'uses'	=> 'Admin\DataUserController@update',	
	])->middleware(Authorize::class.':is_consulta,'.Acceso::class);

Route::get('datauser/show/{id}', [
		'as'	=> 'consulta.datauser.show',
		'uses'	=> 'Admin\DataUserController@show',	
	])->middleware(Authorize::class.':is_consulta,'.Acceso::class);
