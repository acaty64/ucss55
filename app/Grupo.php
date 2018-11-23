<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'facultad_id', 'sede_id', 'cod_grupo', 'wgrupo', 
    ];
    /************* RELATIONSHIPS *********/
    public function cursogrupo()
    {
        return $this->hasMany('App\CursoGrupo', 'cod_grupo', 'cod_grupo');
    }

    /************* FUNCIONES ************/
    protected function facultadSede()
    {
    	$facultad_id = \Session::get('facultad_id');
    	$sede_id = \Session::get('sede_id');
    	return Grupo::where('facultad_id', $facultad_id)->where('sede_id',$sede_id)->get();
    }

}
