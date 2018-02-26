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
        /* Modifica el sw_cambio de CursoGrupo*/
        $facultad_id = $options['facultad_id'];
        $sede_id = $options['sede_id'];
        $curso_id = $options['curso_id'];
        $grupo_id = $options['grupo_id'];
        $cursoGrupo = CursoGrupo::where('curso_id',$curso_id)->where('grupo_id',$grupo_id)->first();
        $cursoGrupo->sw_cambio = 1;
        $cursoGrupo->save();

        return [
           'success' => true,
            ];
    }

    public function load(Request $request)
    {
        $facultad_id = $request->facultad_id;
        $sede_id = $request->sede_id;
        $user_id = $request->docente_id;

        $xgrupos = Grupo::where('facultad_id',$facultad_id)
                ->where('sede_id',$sede_id)->get();

        $dcursos = DCurso::where('facultad_id',$facultad_id)
                ->where('sede_id',$sede_id)
                ->where('user_id',$user_id)->get()->toArray();

        $grupos = [];
        $cursos = [];
        foreach($xgrupos as $grupo){
            array_push($grupos, [
                'grupo_id' => $grupo->id,
                'cgrupo' => $grupo->cgrupo,
                'wgrupo' => $grupo->wgrupo
            ]);
            $xcursos = $grupo->cursogrupo;
            foreach($xcursos as $curso){
                $item = $curso->curso;
                array_push( $cursos, [
                    'grupo_id' => $grupo->id,
                    'curso_id' => $item->id,
                    'ccurso' => $item->ccurso,
                    'wcurso' => $item->wcurso,
                    'registered' => array_search($item->id, array_column($dcursos,'id'))
                ]);
            }
        }
      
        $registrations = [];
        foreach ($cursos as $item){
            if(is_numeric($item['registered'])){
                array_push($registrations, $item);
            }
        }

        $registration = [];
        foreach ($cursos as $item){
            if(!is_numeric($item['registered'])){
                array_push($registration, $item);
            }
        }

        $data = [];
        $data['grupos'] = $grupos ;
        $data['registration'] = $registration ;
        $data['registrations'] = $registrations ;

        return [
            'success' => true,
            'data' => $data
        ];        

    }

    function save(Request $request)
    {
        return [
            'success' => true,
            'data' => '$request' 
        ];
    }

}
