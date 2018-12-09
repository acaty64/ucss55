<?php

namespace App\Http\Controllers\Api;

use App\Acceso;
use App\Http\Controllers\Controller;
use App\Rhora;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RhoraController extends Controller
{
    public function save(Request $request)
    {
        $rhoras = $request->rhoras;
        $facultad_id = $request->facultad_id;
        $sede_id = $request->sede_id;
        $olds = Rhora::where('facultad_id', $facultad_id)
                        ->where('sede_id', $sede_id)->get();
        foreach ($olds as $old) {
            $old->delete();
        }
        $contador = 0;
        foreach ($rhoras as $rhora) {
            $new = new Rhora([
                    'facultad_id' => $facultad_id,
                    'sede_id' => $sede_id,
                    'user_id' => $rhora['id'],
                    'rhoras' => $rhora['rhoras'],
                ]);
            $new->save();
            $contador++;
        }
        return [
                'contador' => $contador,
            ];
    }

}
