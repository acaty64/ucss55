<?php

namespace App\Http\Controllers\Api;

use App\Acceso;
use App\Denvio;
use App\Http\Controllers\Controller;
use App\Menvio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

class EnvioController extends Controller
{
    public function load(Request $request)
    {
        $id = $request->id;
        $facultad_id = $request->facultad_id;
        $sede_id = $request->sede_id;
        $type_id = $request->type_id;
        \Session::put('facultad_id', $facultad_id, 60);
        \Session::put('sede_id', $sede_id, 60);
        \Session::put('type_id', $type_id, 60);

        $users = [];
        // Recuperar los datos del Menvio
        $menvio = Menvio::find($id);
        $updated_at = $menvio->created_at;
        $tipo = $menvio->tipo;
        $accesos = Acceso::acceso_disponibilidad()->sortBy('wdocente');
        foreach ($accesos as $user) {
            // Agregar todos los docentes de la sede/facultad
            $denvio = new Denvio;
            $denvio->user_id = $user->id;
            $denvio->menvio_id = $id;
            $denvio->email_to = $user->datauser->email1;
            $denvio->email_cc = $user->datauser->email2;
            $denvio->updated_at = $updated_at;
            $denvio->tipo = $tipo;
            $denvio->cdocente = User::find($denvio->user_id)->datauser->cdocente;
            $denvio->wdocente = User::find($denvio->user_id)->datauser->wdocente();
            array_push($users, $denvio);
        }
        // Recuperar los Denvios anteriores
        $checked = [];
        $denvios = Denvio::where('menvio_id',$id)->where('tipo', $tipo)->get();
        foreach ($denvios as $denvio) {
            array_push($checked, $denvio->user_id);
        }

        $data = [
                'users' => $users,
                'checked' => $checked
            ];
        return $data;
    }

    public function save(Request $request)
    {
        $id = $request->id;
        $checked = $request->checked;
        // Recuperar los datos del Menvio
        $menvio = Menvio::find($id);
        $updated_at = $menvio->created_at;
        $tipo = $menvio->tipo;
        // Elimina los denvios anteriores
        $denvios = Denvio::where('menvio_id', $id)->get();
        foreach ($denvios as $denvio) {
            $denvio->delete();
        }
        // Agrega los denvios actuales
        $contador = 0;
        foreach ($checked as $check) {
            $denvio = Denvio::create([
                    'user_id' => $check,
                    'menvio_id' => $id,
                    'tipo' => $tipo
                ]);
            $contador++;
        }
        return [
            'contador' => $contador
        ];
    }


}
