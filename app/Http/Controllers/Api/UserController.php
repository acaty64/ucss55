<?php

namespace App\Http\Controllers\Api;

use App\Acceso;
use App\Facultad;
use App\Http\Controllers\Controller;
use App\Sede;
use App\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $facultad_id, $sede_id)
    {

        $accesos = Acceso::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->paginate(5);

        $users = collect();
        $users->put('current_page',$accesos->currentPage());

        $array = collect();
        foreach ($accesos as $acceso) {
            $array->push([
                    'user_id' => $acceso->user_id,
                    'cdocente' => $acceso->c_docente, 
                    'name'  => $acceso->user->name,
                    'wdocente' => $acceso->wdocente,
                    'ctype' => $acceso->ctype,
            ]);
        }
        $users->put('data',$array);

        return [
            'users'  =>  $users,            
            'pagination' => [         
                'total'         => $accesos->total(), 
                'current_page'  => $accesos->currentPage(),   
                'per_page'      => $accesos->perPage(),   
                'last_page'     => $accesos->lastPage(),  
                'from'          => $accesos->firstItem(), 
                'to'            => $accesos->lastItem(),  
            ],          
        ];

    }

}