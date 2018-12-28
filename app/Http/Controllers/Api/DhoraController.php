<?php

namespace App\Http\Controllers\Api;

use App\Acceso;
use App\DHora;
use App\DataUser;
use App\Denvio;
use App\Franja;
use App\Http\Controllers\Controller;
use App\Menvio;
use App\Rhora;
use App\User;
use Illuminate\Http\Request;

class DhoraController extends Controller
{
  public function getData(Request $request)
  {
    $user_id = $request->docente_id;
    $facultad_id = $request->facultad_id;
    $sede_id = $request->sede_id;

    $user = User::findOrFail($user_id);

    $rhora = Rhora::where('facultad_id', $facultad_id)
                ->where('sede_id', $sede_id)
                ->where('user_id', $user_id)
                ->first();

    if(!$rhora){
        $rhoras = 0;
    }else{
        $rhoras = $rhora->rhoras;
    }


    $franjas = Franja::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->get();
    if(!$franjas){
        dd('No hay franjas');
    }
    
    $turnos = $franjas->sortBy('turno')->groupBy('turno');
    $gfranjas=array();
    foreach ($turnos as $key_turno => $turno) {
        $horas = $turno->where('turno',$key_turno)->sortBy('hora')->groupBy('hora');
        foreach ($horas as $key_hora => $hora) {
            $xfranja = Franja::where('turno', $key_turno)
                            ->where('hora', $key_hora)
                            ->first();
            array_push($gfranjas, ['turno'=>$key_turno,'hora'=>$key_hora, 'wfranja'=>$xfranja->wfranja]);
        }
    }

    $cfranjas = [];
    foreach ($franjas as $franja) {
        $campo = "D".$franja->dia.'_H'.$franja->turno.$franja->hora;
        array_push($cfranjas, $campo);
    }

    $wdocente = DataUser::where('user_id',$user_id)->first()->wdocente();

    $collect_dhoras = DHora::where('user_id', $user_id)->where('sede_id', $sede_id)->where('facultad_id', $facultad_id)->get();

    $dhoras = [];
    foreach ($collect_dhoras as $value) {
        $xfranja = $value->wfranja;
        array_push($dhoras, $xfranja);
    }

    $data = [
        'cfranjas' => collect($cfranjas),
        'gfranjas' => collect($gfranjas),
        'dhoras' => collect($dhoras),
        'wdocente' => $wdocente,
        'rhoras' => $rhoras,
        ];  
    return $data; 
  }
  public function save(Request $request)
  {
    $docente_id = $request->docente_id;
    $facultad_id = $request->facultad_id;
    $sede_id = $request->sede_id;
    $checked = $request->checked;

    /* Eliminar las dhoras anteriores */
    $dhoras = DHora::where('user_id', $docente_id)->where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->get();
    foreach ($dhoras as $dhora) {
        $dhora->delete();
    }
    /* Graba nuevas dhoras */
    $contador = 0;
    foreach ($checked as $check) {
	    	Dhora::create([
		        'facultad_id' => $facultad_id,
		        'sede_id' => $sede_id,
		        'user_id' => $docente_id,
		        'wfranja' => $check
	    		]);
				$contador++;    		
    }
    
    // Modifica switch respuesta en Denvios
    $denvio = Denvio::join('menvios as me', 'me.id', '=', 'denvios.menvio_id')
            ->select('denvios.*')
            ->where('me.facultad_id', $facultad_id)
            ->where('me.sede_id', $sede_id)
            ->where('denvios.user_id', $docente_id)
            ->orderBy('me.flimite', 'desc')
            ->first();
    if($denvio){
      $denvio->sw_rpta1 = '1';
      $denvio->save();
    }

    return ['contador' => $contador];

  }
    
}
