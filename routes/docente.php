<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

// ROUTES

Route::get('datauser/edit/{id}', [
		'as'	=> 'docente.datauser.edit',
		'uses'	=> 'Admin\DataUserController@edit',	
	])->middleware(Authorize::class.':is_docente,'.Acceso::class);

Route::put('datauser/update', [
		'as'	=> 'docente.datauser.update',
		'uses'	=> 'Admin\DataUserController@update',	
	])->middleware(Authorize::class.':is_docente,'.Acceso::class);

Route::get('dhora/edit/{id}', [
		'as'	=> 'docente.dhora.edit',
		'uses'	=> 'Admin\DHoraController@edit',	
	])->middleware(Authorize::class.':is_docente,'.Acceso::class);

Route::put('dhora/update', [
		'as'	=> 'docente.dhora.update',
		'uses'	=> 'Admin\DHoraController@update',	
	])->middleware(Authorize::class.':is_docente,'.Acceso::class);

Route::get('dcurso/edit/{id}', [
		'as'	=> 'docente.dcurso.edit',
		'uses'	=> 'Admin\DcursoController@edit',	
	])->middleware(Authorize::class.':is_docente,'.Acceso::class);

Route::put('dcurso/update', [
		'as'	=> 'docente.dcurso.update',
		'uses'	=> 'Admin\DcursoController@update',	
	])->middleware(Authorize::class.':is_docente,'.Acceso::class);

Route::get('horario/show/{id}', [
		'as'	=> 'docente.horario.show',
		'uses'	=> 'Admin\UserController@show',	
	])->middleware(Authorize::class.':is_docente,'.Acceso::class);
