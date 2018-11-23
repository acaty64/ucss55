<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\CursoGrupo;
use App\DCurso;
use App\Denvio;
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

    public function update(Request $request)
    {
        $facultad_id = $request->facultad_id ;
        $sede_id = $request->sede_id ;
        $docente_id = $request->docente_id ;
        $items = $request->items ;

        /* Borrar registros anteriores */
        $dcursos = Dcurso::where('facultad_id', $facultad_id)
                        ->where('sede_id', $sede_id)
                        ->where('user_id', $docente_id)
                        ->get();
        foreach ($dcursos as $dcurso) {
            $dcurso->delete();
        }

        /* Agrega los registros actuales */
        foreach ($items as $item) {
            $curso_id = $item['curso_id'];
            $dcurso = Dcurso::create([
                        'facultad_id' => $facultad_id,
                        'sede_id' => $sede_id,
                        'user_id' => $docente_id,
                        'curso_id' => $curso_id,
                        'prioridad' => 99,
                        'sw_cambio' => false
                    ]);
        }

        // Modifica switch respuesta en Denvios
        $denvio = Denvio::where('user_id','=', $docente_id)
                ->where('tipo','=','disp')->get()->last();
        if(!empty($denvio)){
            $denvio->sw_rpta2 = '1';
            $denvio->save();            
        }
        /*else{
            return [
               'success' => false,
                ];
        }*/

        return [
           'success' => true
            ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_orden(Request $request)
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

    // $grupos = array grupos
    // $registrations = array todos los cursos no seleccionados 
    // $registration = array curso seleccionados
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
                'cgrupo' => $grupo->cod_grupo,
                'wgrupo' => $grupo->wgrupo
            ]);
            $xcursos = $grupo->cursogrupo;
            foreach($xcursos as $curso){
                $item = $curso->curso;
                array_push( $cursos, [
                    'grupo_id' => $grupo->id,
                    'curso_id' => $item->id,
                    'ccurso' => $item->cod_curso,
                    'wcurso' => $item->wcurso,
                    'registered' => array_search($item->id, array_column($dcursos,'curso_id'))
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

}
