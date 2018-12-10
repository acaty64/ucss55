<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;



// ROUTES

Route::get('menu/index', [
		'as'	=> 'master.menu.index',
		'uses'	=> 'Master\MenuController@index',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::get('/menu/view', function (){
	return view('menu.view');
});

Route::get('menu/generar', [
		'as'	=> 'master.menu.generar',
		'uses'	=> 'Master\MenuController@generar',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::get('menu/generarhelp', [
		'as'	=> 'master.menu.generarhelp',
		'uses'	=> 'Master\MenuController@generarhelp',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::get('menu/create', [
		'as'	=> 'master.menu.create',
		'uses'	=> 'Master\MenuController@create',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::post('menu/store', [
		'as'	=> 'master.menu.store',
		'uses'	=> 'Master\MenuController@store',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::get('menu/delete', [
		'as'	=> 'master.menu.delete',
		'uses'	=> 'Master\MenuController@delete',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::get('menu/{menu}/edit', [
		'as'	=> 'master.menu.edit',
		'uses'	=> 'Master\MenuController@edit',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::post('menu/update', [
		'as'	=> 'master.menu.update',
		'uses'	=> 'Master\MenuController@update',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::post('menu/{type}/show', [
		'as'	=> 'master.menu.show',
		'uses'	=> 'Master\MenuController@show',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::get('type/index', [
		'as'	=> 'master.type.index',
		'uses'	=> 'Master\TypeController@index',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);

Route::get('menutype/index', [
		'as'	=> 'master.menutype.index',
		'uses'	=> 'Master\MenuTypeController@index',	
	])->middleware(Authorize::class.':is_master,'.Acceso::class);