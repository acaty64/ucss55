<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Envio's Api Route
 *
 */
Route::get('menvio/index', [
		'as'	=> 'api.menvio.index',
		'uses'	=> 'Api\EnvioController@index',	
	]);
Route::post('envio/load', [
		'as'	=> 'api.envio.load',
		'uses'	=> 'Api\EnvioController@load',	
	]);
Route::post('envio/save', [
		'as'	=> 'api.envio.save',
		'uses'	=> 'Api\EnvioController@save',	
	]);

/**
 * Dcurso's Api Route
 *
 */

Route::post('dcurso/index', [
		'as'	=> 'api.dcurso.index',
		'uses'	=> 'Api\DcursoController@index',	
	]);
//->middleware('can:is_admin,'.Acceso::class);
Route::post('dcurso/load', [
		'as'	=> 'api.dcurso.load',
		'uses'	=> 'Api\DCursoController@load',	
	]);

Route::post('dcurso/save', [
		'as'	=> 'api.dcurso.save',
		'uses'	=> 'Api\DCursoController@save',	
	]);

Route::post('dcurso/update', [
		'as'	=> 'api.dcurso.update',
		'uses'	=> 'Api\DcursoController@update',	
	]);

Route::post('dcurso/update_orden', [
		'as'	=> 'api.dcurso.update_orden',
		'uses'	=> 'Api\DcursoController@update_orden',	
	]);

/**
 * Users's Api Route
 *
 */

//Route::middleware('auth:api')->get('generar/{type_id}/{auth_id?}', [
Route::get('user/index/{facultad_id}/{sede_id}/{page?}', [
	'as' => 'user.index',
	'uses' =>'Api\UserController@index'
]);


/**
 * Menu's Api Route
 *
 */

//Route::middleware('auth:api')->get('generar/{type_id}/{auth_id?}', [
Route::get('generar/{type_id}/{auth_id?}', [
	'as' => 'generar',
	'uses' =>'Api\MenuController@generar'
]);



Route::get('generarHelp/{type_id}', [
	'as' => 'generarHelp',
	'uses' =>'Api\MenuController@generarHelp'
]);

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/