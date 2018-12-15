<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;



// ROUTES

Route::get('menu/index', [
		'as'	=> 'master.menu.index',
		'uses'	=> 'MenuController@index',	
	]);

Route::get('menu/view', function (){
	return view('menu.view');
});

Route::get('menu/generar', [
		'as'	=> 'master.menu.generar',
		'uses'	=> 'MenuController@generar',	
	]);

Route::get('menu/generarhelp', [
		'as'	=> 'master.menu.generarhelp',
		'uses'	=> 'MenuController@generarhelp',	
	]);

Route::get('menu/create', [
		'as'	=> 'master.menu.create',
		'uses'	=> 'MenuController@create',	
	]);

Route::post('menu/store', [
		'as'	=> 'master.menu.store',
		'uses'	=> 'MenuController@store',	
	]);

Route::get('menu/delete', [
		'as'	=> 'master.menu.delete',
		'uses'	=> 'MenuController@delete',	
	]);

Route::get('menu/{menu}/edit', [
		'as'	=> 'master.menu.edit',
		'uses'	=> 'MenuController@edit',	
	]);

Route::post('menu/update', [
		'as'	=> 'master.menu.update',
		'uses'	=> 'MenuController@update',	
	]);

Route::post('menu/{type}/show', [
		'as'	=> 'master.menu.show',
		'uses'	=> 'MenuController@show',	
	]);

Route::get('type/index', [
		'as'	=> 'master.type.index',
		'uses'	=> 'TypeController@index',	
	]);

Route::get('menutype/index', [
		'as'	=> 'master.menutype.index',
		'uses'	=> 'MenuTypeController@index',	
	]);