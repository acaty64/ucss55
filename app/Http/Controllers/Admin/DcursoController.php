<?php

namespace App\Http\Controllers\Admin;

use App\Acceso;
use App\Curso;
use App\CursoGrupo;
use App\DCurso;
use App\DataUser;
use App\Denvio;
use App\Grupo;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Lista;
use App\Menvio;
use App\Semestre;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;

class DCursoController extends Controller
{
    public function orden($curso_id)
    {
        $curso = Curso::findOrFail($curso_id);
        return view('admin.dcurso.index_orden')
                ->with('curso', $curso);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($grupo_id, $curso_id)
    {
//dd($grupo_id, $curso_id);
        $grupo_id = $grupo_id;
        $curso_id = $curso_id;
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        $dcursos = DCurso::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->where('curso_id',$curso_id)->get();

        $all = Dcurso::where('facultad_id',$facultad_id)->where('sede_id', $sede_id)->where('curso_id', $curso_id)->get();
/*        $chk99 = $tmp->where('prioridad',99);
        if ($chk99 != null) {
            $all = $tmp->sortBy('prioridad');
            $orden = 0;
            foreach ($all as $item) {
                $item->prioridad = ++$orden;
                $item->save();
            }
        }else{
            $all = $tmp->sortBy('prioridad');
        }
*/
        $tmp = collect();
        foreach ($all as $dcurso) {
            $tmp->push([
                    'id'    => $dcurso->id,
                    'prioridad'=>$dcurso->prioridad, 
                    'user_id'=>$dcurso->user->id, 
                    'name'=>$dcurso->user->datauser->wdocente(),
                    'curso_id' =>$dcurso->curso_id,
                    'facultad_id'=>$facultad_id,
                    'sede_id'=>$sede_id,
                ]);
        }
        $lista = $tmp->sortBy('prioridad');
        $curso = Curso::find($curso_id);

        //return view('admin.dcurso.index')
        return view('admin.dcurso.index')
            ->with('curso',$curso)
            ->with('grupo_id', $grupo_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('errors.000');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('errors.000');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('errors.000');
    }

    /*********************************************/  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($docente_id)
    {
        if(\Session::get('ctype')=='Master' || 
            \Session::get('ctype')=='Administrador'){
            $editable = true;
        }else{
            $editable = false;
        }
        $docente = User::findOrFail($docente_id);
        if($docente->rhora > 0 || $editable){
            // $docente = User::findOrFail($docente_id);
            $facultad_id = \Session::get('facultad_id');
            $sede_id = \Session::get('sede_id');
            $check = User::editable('disp',$docente_id);

            return view('admin.dcurso.edit')
                    ->with('docente_id',$docente_id)
                    ->with('facultad_id', $facultad_id)
                    ->with('sede_id', $sede_id)
                    ->with('wdocente', $docente->datauser->wdocente())
                    ->with('sw_cambio', $check);
        }else{
            Flash::warning('El docente '.$docente->name.' no tiene requerimiento de horario');
            return view('help');
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*************************************************************************/    
    public function update(Request $request)
    {
        // Ubicacion 
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        // Docente seleccionado
        $docente_id = $request->docente_id;
        $user = User::find($docente_id);
        // Nuevos cursos seleccionados
        $newCursos = $request->cursos;
        // Usuario
        $oldCursos = [];
        $contador = 0;
        $dCursos = User::find($docente_id)->dcursos;
        foreach ($dCursos as $dCurso) {
            $oldCursos[$contador] = $dCurso->curso_id ;
            $contador++;
        }
        /* MODIFICA LOS REGISTROS */
        if (empty($newCursos)) {
            $agregados = [];
            $eliminados = $oldCursos;
        }else{
            //$iguales = array_intersect($newCursos, $oldCursos);
            $agregados = array_diff($newCursos, $oldCursos);
            $eliminados = array_diff($oldCursos, $newCursos);
        }
        /*  Agrega registros  */
        $dCurso = new dCurso;
        foreach ($agregados as $curso_id) {
            $dCurso = DCurso::create([
                'facultad_id'=>$facultad_id,
                'sede_id'=>$sede_id,
                'user_id'=>$user->id,
                'curso_id'=>$curso_id, 
                'prioridad' => 99,
                'sw_cambio' => true
                 ]);
        }
        /* Elimina registros */
        foreach ($eliminados as $curso_id) {
            $dCurso = User::find($docente_id)->dcursos->toarray();
            $clave = array_search($curso_id, array_column($dCurso, 'curso_id'));
            //dd($clave);
            $clave_id = $dCurso[$clave]['id'];
            //dd($clave_id);
            $delCurso = dCurso::find($clave_id);
            //dd($dCursos);
            $delCurso->delete();  
        }

        // Modifica switch respuesta en Denvios
        $denvio = Denvio::where('user_id','=', $docente_id)
                ->where('tipo','=','disp')->get()->last();
        if(!empty($denvio)){
            $denvio->sw_rpta2 = '1';
            $denvio->save();            
        }

        Flash::success('Se ha registrado la modificación de disponibilidad de cursos de forma exitosa');
        if (\Session::get('ctype') == 'Administrador') {
            return redirect()->route('administrador.user.index');
        }else{
            $route = "'".strtolower(\Session::ctype).".dcurso.edit'";
            return redirect()->route($route, $request->docente_id);
        }
    }

/*************************************************************************/    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('errors.000');
    }

    /* Identifica si tiene envio de disponibilidad pendiente */
        // Si el usuario es master pude modificar
        // Selecciona los denvios del usuario
        // Selecciona los menvios relacionados
        // Verifica si existe un menvio pendiente 
    public function sw_cambio($user_id, $tipo)
    {
        if (\Session::get('ctype') == 'Administrador' || \Session::get('ctype') == 'Master') {
            $sw_cambio = '1';
        }else{
            date_default_timezone_set('America/Lima');
            $hoy = Carbon::now();
            $ayer = Carbon::now()->subDays(1);
            $denvios = User::find($user_id)->denvios;
            if (!empty($denvios)) {
                $menvios = [];
                $contador = 0;
                foreach ($denvios as $denvio) {
                    if ($denvio->menvio->tipo=$tipo 
                            and $denvio->menvio->fenvio < $hoy
                            and $denvio->menvio->flimite > $ayer)
                    {
                        $menvios[$contador++] = $denvio->menvio->toArray();
                    }
                }
                if(!empty($menvios)){
                    $sw_cambio = '1';
                }else{
                    $sw_cambio = '0';
                }
            }else{
                $sw_cambio = '0';
            }            
        }
        return $sw_cambio;
    }

    /* Lista las actualizaciones de disponibilidad de cursos */
    public function lista()
    {
        $lista = Lista::listar('disp','sw_rpta2');
        return view('admin.disp.lista')
            ->with('lista', $lista)
            ->with('tipo','dcurso')
            ->with('title', 'Disponibilidad de Cursos');
    } 

    public function List2Excel()
    {   
        $lista = Lista::listar('disp','sw_rpta2');
        $now = Carbon::now();
        $namefile = 'DC_'.$now->format('Y').'_'.$now->format('m').'_'.$now->format('d').'_'.$now->format('H').'_'.$now->format('i').'_'.$now->format('s');
        Excel::create($namefile, function($excel) use($lista){
            $excel->sheet('Disponibilidad de Cursos', function($sheet) use($lista){
                $sheet->fromArray($lista);
            });
        })->download('xls');
    }


}
