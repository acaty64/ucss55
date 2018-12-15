<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

// ROUTES

Route::get('datauser/edit/{id}', [
		'as'	=> 'docente.datauser.edit',
		'uses'	=> 'DataUserController@edit',	
	]);

Route::put('datauser/update', [
		'as'	=> 'docente.datauser.update',
		'uses'	=> 'DataUserController@update',	
	]);

Route::get('dhora/edit/{id}', [
		'as'	=> 'docente.dhora.edit',
		'uses'	=> 'DHoraController@edit',	
	]);

Route::put('dhora/update', [
		'as'	=> 'docente.dhora.update',
		'uses'	=> 'DHoraController@update',	
	]);

Route::get('dcurso/edit/{id}', [
		'as'	=> 'docente.dcurso.edit',
		'uses'	=> 'DcursoController@edit',	
	]);

Route::put('dcurso/update', [
		'as'	=> 'docente.dcurso.update',
		'uses'	=> 'DcursoController@update',	
	]);

Route::get('horario/show/{id}', [
		'as'	=> 'docente.horario.show',
		'uses'	=> 'UserController@show',	
	]);

Route::get('pdf/syllabus/{id}', [
		'as'	=> 'pdf.syllabus.show',
		'uses'	=> 'PDFController@syllabus',	
	]);
	// ]);
