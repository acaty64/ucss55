<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

// ROUTES
Route::get('cursogrupo/index/{id}', [
		'as'	=> 'responsable.cursogrupo.index',
		'uses'	=> 'CursoGrupoController@index',	
	]);

Route::get('cursogrupo/edit/{id}', [
		'as'	=> 'responsable.cursogrupo.edit',
		'uses'	=> 'CursoGrupoController@edit',	
	]);

Route::get('datauser/edit/{id}', [
		'as'	=> 'responsable.datauser.edit',
		'uses'	=> 'DataUserController@edit',	
	]);

Route::put('datauser/update', [
		'as'	=> 'responsable.datauser.update',
		'uses'	=> 'DataUserController@update',	
	]);

Route::get('dcurso/edit/{id}', [
		'as'	=> 'responsable.dcurso.edit',
		'uses'	=> 'DcursoController@edit',	
	]);

Route::put('dcurso/update', [
		'as'	=> 'responsable.dcurso.update',
		'uses'	=> 'DcursoController@update',	
	]);

Route::get('dhora/edit/{id}', [
		'as'	=> 'responsable.dhora.edit',
		'uses'	=> 'DHoraController@edit',	
	]);

Route::put('dhora/update', [
		'as'	=> 'responsable.dhora.update',
		'uses'	=> 'DHoraController@update',	
	]);

Route::get('horario/show/{id}', [
		'as'	=> 'responsable.horario.show',
		'uses'	=> 'UserController@show',	
	]);
 
Route::get('cursogrupo/index', [
		'as'	=> 'responsable.cursogrupo.index',
		'uses'	=> 'CursoGrupoController@index',	
	]);


Route::fallback(function()
{
	return response('Página no encontrada', 404);
});

