<?php

use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    \Session()->put('facultad_id', 0);
    \Session()->put('sede_id', 0);
    \Session()->put('type_id', 0);
    return view('auth.login');
    //return view('welcome');
});

Route::get('/home', [
	'as'	=> 'home',
	'uses'	=> 'HomeController@index']);

Route::post('/home/acceso', [
	'as'	=> 'home.acceso',
	'uses'	=> 'HomeController@acceso',	
]);

Auth::routes();
