<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Mail\Disponibilidad;
use Illuminate\Http\Request;
use Illuminate\Routing\asset;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    /* Request:                                             */
    /*          output: 'preview' or 'email'                */
    /*          model: Class                                */
    /*          data: [
    /*                    'email_to'  => 'REQUIRED', 
    /*                    'others'    => 'ACCORDING TO CLASS'
    /*                ]                                      */
    /*                                                       */
    public function send(Request $request)
    {
        $data = $request->data;
        $model = $request->model;
        if($request->output == 'preview')
            return new $model($data);
        elseif ($request->output == 'email') {
            try {            
                Mail::to($data['email_to'])
                    ->send(new $model($data));
                return true;
            } catch (Exception $e) {
                return false;
            }
        endif
    }
}
