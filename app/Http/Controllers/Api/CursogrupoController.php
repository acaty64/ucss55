<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\CursoGrupo;
use App\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CursogrupoController extends Controller
{
    public function load(Request $request)
    {
// return $request;
        $facultad_id = $request->facultad_id;
        $sede_id = $request->sede_id;
        $grupo_id = $request->grupo_id;
// return [$facultad_id, $sede_id, $grupo_id];
        $grupo = Grupo::findOrFail($grupo_id);
        $cursos = Curso::all();
        $cg = CursoGrupo::where('cod_grupo', $grupo->cod_grupo)->get();
        $cursogrupo = collect([]);
        foreach ($cg as $item) {
            $newItem = collect($item)->put('wcurso', $item->curso->wcurso);
            $cursogrupo->push($newItem);
        }
        $data = [
                'grupo' => $grupo,
                'cursogrupo' =>$cursogrupo,
                'cursos' =>$cursos
            ];
        return [
                'success' => true,
                'data' => $data
            ];
    }

}
