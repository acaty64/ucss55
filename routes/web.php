<?php

use App\Mail\Disponibilidad;
use App\Menvio;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;



Route::get('/', function () {
    \Session()->put('facultad_id', 0);
    \Session()->put('sede_id', 0);
    \Session()->put('type_id', 0);
    return view('auth.login');
    //return view('welcome');
});


// Route::get('/', function () {
// 	$cuenta = Menvio::find(1);
//     return $cuenta->envio;
// });


Route::get('/home', [
	'as'	=> 'home',
	'uses'	=> 'HomeController@index']);

Route::post('/home/acceso', [
	'as'	=> 'home.acceso',
	'uses'	=> 'HomeController@acceso',	
]);

Auth::routes();
