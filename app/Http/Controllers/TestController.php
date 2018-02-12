<?php

namespace App\Http\Controllers;

use App\Curso;
use App\DCurso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function test($value='')
    {
        $facultad_id = '1';
        $sede_id = '1';
        $user_id = '4';
        $dcursos = DCurso::where('facultad_id',$facultad_id)
                ->where('sede_id',$sede_id)
                ->where('user_id',$user_id)->get()->toArray();

        $all = Curso::all();
        $cursos = [];
        foreach ($all as $item) {
            array_push( $cursos, [
                'curso_id' => $item->id,
                'ccurso' => $item->ccurso,
                'wcurso' => $item->wcurso,
                'registered' => array_search($item->id, array_column($dcursos,'id'))
            ]);
        }

dd($cursos);

    }
}