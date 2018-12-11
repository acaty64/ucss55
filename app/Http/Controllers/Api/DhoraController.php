<?php

namespace App\Http\Controllers\Api;

use App\Acceso;
use App\DHora;
use App\Denvio;
use App\Http\Controllers\Controller;
use App\Menvio;
use Illuminate\Http\Request;

class DhoraController extends Controller
{
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
    $denvio->sw_rpta1 = '1';
    $denvio->save();

    return ['contador' => $contador];

  }
    
}
