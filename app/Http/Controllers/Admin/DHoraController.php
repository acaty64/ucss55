<?php

namespace App\Http\Controllers\Admin;

use App\Acceso;
use App\DHora;
use App\DataUser;
use App\Denvio;
use App\Franja;
use App\Http\Controllers\Admin\ListController as ListController;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Lista;
use App\Menvio;
use App\Rhora;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;

class DHoraController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        $check = User::editable('disp',$user_id);

        if(\Session::get('ctype')=='Master' || 
            \Session::get('ctype')=='Administrador'){
            $editable = true;
        }else{
            $editable = false;
        }

        $user = User::findOrFail($user_id);
        if($user->rhora > 0 || $editable){
            return view('admin.dhora.vue_edit')
                    ->with('facultad_id', $facultad_id)
                    ->with('sede_id', $sede_id)
                    ->with('docente_id', $user_id)
                    ->with('sw_cambio', $check)
                    ;
        }else{
            Flash::warning('El docente '.$user->name.' no tiene requerimiento de horario');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request)
    // {
    //     // Rehacer data
    //     //$franjas = Franja::get();
    //     // $facultad_id = \Cache::get('facultad_id');
    //     $facultad_id = \Session::get('facultad_id');
    //     // $sede_id = \Cache::get('sede_id');
    //     $sede_id = \Session::get('sede_id');
    //     // Elimina la disponibilidad horaria anterior
    //     $dhoras = DHora::where('user_id', $request->user_id)->where('facultad_id',$facultad_id)->where('sede_id',$sede_id);
    //     foreach ($dhoras as $dhora) {
    //         $dhora->delete();
    //     }
    //     // Genera nuevas franjas en DHora
    //     $franjas = Franja::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->get();
    //     foreach ($franjas as $franja) {
    //         $campo = 'D'.$franja->dia.'_H'.$franja->turno.$franja->hora;
    //         if ($request->$campo == "on") {
    //             $dhora = new DHora;
    //             $dhora->user_id = $request->user_id;
    //             $dhora->facultad_id = $facultad_id;
    //             $dhora->sede_id = $sede_id;
    //             $dhora->wfranja = $campo;
    //             // Graba en archivo Dhoras
    //             $dhora->save();
    //         }
    //     }
        
    //     // Modifica switch respuesta en Denvios
    //     $acceso = Acceso::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->where('user_id', $request->user_id)->first();
    //     $menvio = Menvio::find($acceso->disp_id);
    //     if(!empty($menvio)){
    //         $denvio = Denvio::where('menvio_id', $menvio->id)
    //                     ->where('user_id', $request->user_id)->first();
    //         $denvio->sw_rpta1 = '1';
    //         $denvio->save();
    //     }

    //     // Redirecciona segun tipo de usuario
    //     Flash::success('Se ha registrado la modificación de disponibilidad horaria de forma exitosa');
    //     // if (\Cache::get('ctype') == 'Administrador') {
    //     if (\Session::get('ctype') == 'Administrador') {
    //         return redirect()->route('administrador.user.index');
    //     }else{
    //         return redirect()->route(strtolower(\Session::get('ctype')).'.dhora.edit', $user_id);
    //         // return redirect()->route(strtolower(Session::get('ctype')).'.dhora.edit', $user_id);
    //     }
    // }

    /* Identifica si tiene envio de disponibilidad pendiente */
        // Si el usuario es Administrador puede modificar
        // Selecciona los denvios del usuario
        // Selecciona los menvios relacionados
        // Verifica si existe un menvio pendiente 
    public function sw_cambio($user_id, $tipo)
    {
        // if (Session::get('ctype') == 'Administrador' || Session::get('ctype') == 'Master') {
        if (\Session::get('ctype') == 'Administrador' 
                || \Session::get('ctype') == 'Master') {
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
                            // and $denvio->menvio->fenvio < $hoy
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

    /* Lista las actualizaciones de disponibilidad de horas */
    public function lista()
    {
        $lista = Lista::listar('disp','sw_rpta1');
        return view('admin.disp.lista')
            ->with('lista', $lista)
            ->with('tipo', 'dhora')
            ->with('title', 'Disponibilidad de Horarios');
    } 

    public function List2Excel()
    {       
        $lista = Lista::listar('disp','sw_rpta1');
        $now = Carbon::now();
        $namefile = 'DH_'.$now->format('Y').'_'.$now->format('m').'_'.$now->format('d').'_'.$now->format('H').'_'.$now->format('i').'_'.$now->format('s');
        Excel::create($namefile, function($excel) use($lista){
            $excel->sheet('Disponibilidad Horaria', function($sheet) use($lista){
                $sheet->fromArray($lista);
            });
        })->download('xls');
    }
    
}
