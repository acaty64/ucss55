<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

// ROUTES

/** RHORA ********************************************/
Route::get('rhora/index', [
		'as'	=> 'administrador.rhora.index',
		'uses'	=> 'RhoraController@index',	
	]);

Route::get('rhora/create',  [
		'as'	=> 'administrador.rhora.create',
		'uses'	=> 'RhoraController@create',	
	]);

Route::post('rhora/store',  [
		'as'	=> 'administrador.rhora.store',
		'uses'	=> 'RhoraController@store',	
	]);

Route::get('rhora/edit/{user_id}',  [
		'as'	=> 'administrador.rhora.edit',
		'uses'	=> 'RhoraController@edit',	
	]);

Route::put('rhora/update',  [
		'as'	=> 'administrador.rhora.update',
		'uses'	=> 'RhoraController@update',	
	]);


/** USER ********************************************/
Route::get('user/index',  [
		'as'	=> 'administrador.user.index',
		'uses'	=> 'userController@index',	
	]);

Route::get('user/create', [
		'as'	=> 'admin.user.create',
		'uses'	=> 'userController@create',	
	]);

Route::post('user/store', [
		'as'	=> 'admin.user.store',
		'uses'	=> 'userController@store',	
	]);

Route::get('user/edit/{user_id}', [
		'as'	=> 'admin.user.edit',
		'uses'	=> 'userController@edit',	
	]);

Route::put('user/update', [
		'as'	=> 'admin.user.update',
		'uses'	=> 'userController@update',	
	]);

Route::get('user/{user}/show', [
		'as'	=> 'admin.user.show',
		'uses'	=> 'userController@show',	
	]);

Route::get('user/{id}/destroy', [
		'as'	=> 'admin.user.destroy',
		'uses'	=> 'userController@destroy',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

Route::get('user/editpass/{id}', [
		'as'	=> 'admin.user.editpass',
		'uses'	=> 'userController@editpass',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

/** DATAUSER *****************************************/
Route::get('datauser/edit/{id}', [
		'as'	=> 'admin.datauser.edit',
		'uses'	=> 'dataUserController@edit',	
	]);

Route::put('datauser/update', [
		'as'	=> 'administrador.datauser.update',
		'uses'	=> 'dataUserController@update',	
	]);

/** ACCESO *******************************************/
Route::get('acceso/edit/{id}', [
		'as'	=> 'admin.acceso.edit',
		'uses'	=> 'accesoController@edit',	
	]);

Route::put('acceso/update', [
		'as'	=> 'admin.acceso.update',
		'uses'	=> 'accesoController@update',	
	]);

/** DHORA ********************************************/

Route::get('dhora/edit/{id}',[
		'as'	=> 'admin.dhora.edit',
		'uses'	=> 'DHoraController@edit'
	]);

Route::put('dhora/update',[
		'as'	=> 'admin.dhora.update',
		'uses'	=> 'DHoraController@update'
	]);

Route::get('dhora/lista',  [
		'as'	=> 'administrador.dhora.lista',
		'uses'	=> 'DHoraController@lista',	
	]);

Route::get('dhora/list2Excel',[
		'as'	=> 'admin.dhora.list2Excel',
		'uses'	=> 'DHoraController@list2Excel'
	]);

/** CURSOGRUPO *******************************************/
Route::get('cursogrupo/index/{id?}', [
		'as'	=> 'admin.cursogrupo.index',
		'uses'	=> 'CursoGrupoController@index',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

Route::get('cursogrupo/edit/{id}', [
		'as'	=> 'admin.cursogrupo.edit',
		'uses'	=> 'CursoGrupoController@edit',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

/** DCURSO *******************************************/
Route::get('dcurso/index/{grupo_id}/{curso_id}', [
		'as'	=> 'admin.dcurso.index',
		'uses'	=> 'DcursoController@index',	
	]);

Route::get('dcurso/orden/{grupo_id}', [
		'as'	=> 'admin.dcurso.orden',
		'uses'	=> 'DcursoController@orden',	
	]);

Route::get('dcurso/edit/{id}', [
		'as'	=> 'admin.dcurso.edit',
		'uses'	=> 'DcursoController@edit',	
	]);

Route::put('dcurso/update', [
		'as'	=> 'admin.dcurso.update',
		'uses'	=> 'DcursoController@update',	
	]);

Route::get('dcurso/lista',  [
		'as'	=> 'administrador.dcurso.lista',
		'uses'	=> 'DCursoController@lista',	
	]);

Route::get('dcurso/list2Excel',[
		'as'	=> 'admin.dcurso.list2Excel',
		'uses'	=> 'DCursoController@list2Excel'
	]);

/** GRUPO ********************************************/
Route::get('grupo/index',  [
		'as'	=> 'administrador.grupo.index',
		'uses'	=> 'GrupoController@index',	
	]);

Route::get('grupo/create',  [
		'as'	=> 'admin.grupo.create',
		'uses'	=> 'GrupoController@create',	
	]);

Route::post('grupo/store',  [
		'as'	=> 'admin.grupo.store',
		'uses'	=> 'GrupoController@store',	
	]);

Route::get('grupo/edit/{id}',[
		'as'	=> 'admin.grupo.edit',
		'uses'	=> 'GrupoController@edit',	
	]);

Route::put('grupo/update',  [
		'as'	=> 'admin.grupo.update',
		'uses'	=> 'GrupoController@update',	
	]);

Route::get('grupo/orden',  [
		'as'	=> 'admin.grupo.orden',
		'uses'	=> 'GrupoController@orden',	
	]);

Route::get('grupo/destroy/{id}',  [
		'as'	=> 'admin.grupo.destroy',
		'uses'	=> 'GrupoController@destroy',	
	]);


/** GRUPOUSERS *************CORREGIR NOMBRES**************************/
Route::get('usergrupos/index',  [
		'as'	=> 'administrador.usergrupo.index',
		'uses'	=> 'UserGrupoController@index',	
	]);

/** FRANJAS ***************************************/
Route::get('franjas/index',  [
		'as'	=> 'administrador.franja.index',
		'uses'	=> 'FranjaController@index',	
	]);

Route::get('franjas/show',  [
		'as'	=> 'administrador.franja.show',
		'uses'	=> 'FranjaController@show',	
	]);

Route::get('franjas/create',  [
		'as'	=> 'administrador.franja.create',
		'uses'	=> 'FranjaController@create',	
	]);

Route::post('franjas/store',  [
		'as'	=> 'administrador.franja.store',
		'uses'	=> 'FranjaController@store',	
	]);

Route::get('franjas/edit/{id}',  [
		'as'	=> 'administrador.franja.edit',
		'uses'	=> 'FranjaController@edit',	
	]);

Route::put('franjas/update',  [
		'as'	=> 'administrador.franja.update',
		'uses'	=> 'FranjaController@update',	
	]);

Route::get('franjas/destroy/{id}',  [
		'as'	=> 'administrador.franja.destroy',
		'uses'	=> 'FranjaController@destroy',	
	]);



/** MENVIO *******************************************/
Route::get('menvios/index',  [
		'as'	=> 'administrador.menvio.index',
		'uses'	=> 'MenvioController@index',	
	]);

Route::get('menvios/create',  [
		'as'	=> 'administrador.menvio.create',
		'uses'	=> 'MenvioController@create',	
	]);

Route::post('menvios/store',  [
		'as'	=> 'administrador.menvio.store',
		'uses'	=> 'MenvioController@store',	
	]);

Route::get('menvios/edit/{id}',  [
		'as'	=> 'administrador.menvio.edit',
		'uses'	=> 'MenvioController@edit',	
	]);

Route::put('menvios/update',  [
		'as'	=> 'administrador.menvio.update',
		'uses'	=> 'MenvioController@update',	
	]);

Route::get('menvios/show/{id}',  [
		'as'	=> 'administrador.menvio.show',
		'uses'	=> 'MenvioController@show',	
	]);

Route::get('menvios/destroy/{id}',  [
		'as'	=> 'administrador.menvio.destroy',
		'uses'	=> 'MenvioController@destroy',	
	]);

/** DENVIO *******************************************/
Route::get('denvios/define/{id}',  [
		'as'	=> 'administrador.denvio.define',
		'uses'	=> 'DenvioController@define',	
	]);

Route::put('denvios/update',  [
		'as'	=> 'administrador.denvio.update',
		'uses'	=> 'DenvioController@update',	
	]);

Route::get('denvios/markall/{id}',  [
		'as'	=> 'administrador.denvio.markall',
		'uses'	=> 'DenvioController@markall',	
	]);

Route::get('denvios/unmarkall/{id}',  [
		'as'	=> 'administrador.denvio.unmarkall',
		'uses'	=> 'DenvioController@unmarkall',	
	]);

/** ENVIO *********************************************/
Route::get('envios/send/{id}', [
		'as'	=> 'administrador.envio.send',
		'uses'	=> 'EnvioController@send',	
	]);

/** PDF ***********************************************/
Route::put('PDF/silaboCurso', [
		'as'	=> 'admin.PDF.silaboCurso',
		'uses'	=> 'PDFController@silaboCurso',	
	]);
