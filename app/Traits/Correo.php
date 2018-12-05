<?php

namespace App\Traits;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Mail\Disponibilidad;
use Illuminate\Http\Request;
use Illuminate\Routing\asset;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Session;

trait Correo
{
    /* Request:                                             */
    /*          output: 'preview' or 'email'                */
    /*          model: Class                                */
    /*          data: [
    /*                    'email_to'  => 'REQUIRED', 
    /*                    'others'    => 'ACCORDING TO CLASS'
    /*                ]                                      */
    /*                                                       */
    public static function send($request)
    {
        $data = $request['data'];
        $model = "App\\Mail\\" . $request['model'];
        if($request['output'] == 'preview'){
// dd($model);
            return new $model($data);
        }
        elseif ($request['output'] == 'email') {
            try {            
                Mail::to($data['email_to'])
                    ->send(new $model($data));
                return true;
            } catch (Exception $e) {
                return false;
            }
        }
    }
}
