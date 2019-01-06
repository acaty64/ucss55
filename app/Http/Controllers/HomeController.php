<?php

namespace App\Http\Controllers;

use App\Acceso;
use App\Denvio;
use App\Facultad;
use App\Sede;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \Session::flush();''
        $user_id = auth()->user()->id;
        $accesos = Acceso::where('user_id', $user_id)->get();
        if($accesos->count() > 0){
            foreach ($accesos as $acceso) {
                $opc_facu[$acceso->facultad_id] = $acceso->wfacultad;
                $opc_sede[$acceso->sede_id] = $acceso->wsede;
            }

            // $facultades = Facultad::all();
            // foreach ($facultades as $facultad) {
            //     $opc_facu[$facultad->id] = $facultad->wfacultad;
            // }

            // $sedes = Sede::all();
            // foreach ($sedes as $sede) {
            //     $opc_sede[$sede->id] = $sede->wsede;
            // }

            return view('home')
                ->with('opc_facu',$opc_facu)
                ->with('opc_sede',$opc_sede);
        }else{
            Flash::error("Solicite su acceso al Departamento Académico de la Facultad.");
            return back();
        }
    }


    public function acceso(Request $request)
    {
        $facultad=Facultad::find($request->facultad_id);
        $sede=Sede::find($request->sede_id);

        \Session::put('facultad_id', $facultad->id, 60);
        \Session::put('sede_id', $sede->id, 60);
        \Session::put('cfacultad',$facultad->cfacultad);
        \Session::put('csede',$sede->csede);
        \Session::put('wfacultad',$facultad->wfacultad);
        \Session::put('wsede',$sede->wsede);

        $usuario = Auth::user();

        if ($usuario->acceder) {
            $aerrors = [];
            $contador = 0;
            date_default_timezone_set('America/Lima');
            $hoy = Carbon::now();
            $ayer = Carbon::now()->subDays(1);
            
            $acceso = Acceso::acceso_auth();
            $denvio = Denvio::find('disp_id');
            if($denvio){
                $menvio = $denvio->menvio;
                if($denvio->sw_rpta1 == 0 && $menvio->flimite > $ayer){
                    $aerrors[$contador++] = 'Debe actualizar su disponibilidad horaria.';
                }   
                if($denvio->sw_rpta2 == 0 && $menvio->flimite > $ayer){
                    $aerrors[$contador++] = 'Debe actualizar su disponibilidad de cursos.';
                }
            }

            $denvio = Denvio::find('carga_id');
            if($denvio){   
                $menvio = $denvio->menvio;
                if($denvio->sw_rpta1 == 0 && $menvio->flimite > $ayer){
                    $aerrors[$contador++] = 'Debe confirmar su carga asignada.';
                }
            }
            $errors = collect($aerrors);
            return view('help')
                ->with('errors',$errors);
        } else {
            Flash::error("Usted no tiene acceso a la Facultad: ".\Session::get('wfacultad').". Filial: ".\Session::get('wsede'));
            return back();
        }    
    }
    /* Modulo de plantilla  */
    public function pagination()
    {
        return view('model.pagination');
    }
}
