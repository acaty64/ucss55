<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\CursoGrupo;
use App\DCurso;
use App\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grupo_id = $request->grupo_id;
        $curso_id = $request->curso_id;
        $facultad_id = $request->facultad_id;
        $sede_id = $request->sede_id;
//        $facultad_id = Session::get('facultad_id');
//        $sede_id = Session::get('sede_id');
        $dcursos = DCurso::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->where('curso_id',$curso_id)->get();

        $all = Dcurso::where('facultad_id',$facultad_id)->where('sede_id', $sede_id)->where('curso_id', $curso_id)->get();

        $lista = [];
        foreach ($all as $dcurso) {
            array_push($lista, [
                    'id'    => $dcurso->id,
                    'prioridad'=>$dcurso->prioridad, 
                    'user_id'=>$dcurso->user->id, 
                    'cdocente'=>$dcurso->user->datauser->cdocente,
                    'wdocente'=>$dcurso->user->datauser->wdocente(),
                    'curso_id' =>$dcurso->curso_id,
                    'facultad_id'=>$facultad_id,
                    'sede_id'=>$sede_id,
                    'sw_cambio'=>$dcurso->sw_cambio,
                ]);
        };
//dd('post index',$lista);
        return [
            'success' => true,
            'data' => $lista
        ];

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $all = collect($request->registros);  
        foreach ($all as $item) {
            $dcurso = Dcurso::find($item['id']);
            $dcurso->prioridad = $item['prioridad'];
            $dcurso->save(); 
        };
        $options = $all->first();
        $cod_curso = Curso::findOrFail($options['curso_id'])->cod_curso;
        $cod_grupo = Grupo::findOrFail($options['grupo_id'])->cod_grupo;
        /* Modifica el sw_cambio de CursoGrupo*/
        $facultad_id = $options['facultad_id'];
        $sede_id = $options['sede_id'];
        // $cod_curso = $options[$cod_curso];
        // $cod_grupo = $options[$cod_grupo];
        $cursoGrupo = CursoGrupo::where('cod_curso',$cod_curso)->where('cod_grupo',$cod_grupo)->first();
        $cursoGrupo->sw_cambio = 1;
        $cursoGrupo->save();

        return [
           'success' => true,
            ];
    }

}
