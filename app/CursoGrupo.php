<?php

namespace App;

use App\Curso;
use App\Grupo;
use Illuminate\Database\Eloquent\Model;

class CursoGrupo extends Model
{
    protected $table = 'cursogrupo';    
    protected $append = ['curso_id', 'grupo_id'];   
    protected $fillable = ['cod_curso', 'cod_grupo', 'sw_cambio'];	

    /*********** RELATIONSHIP *******/
    public function grupo()
    {
        /* return $this->belongsTo('App\User', 'foreign_key'); */
        return $this->belongsTo('App\Grupo');
    }

    public function curso()
    {
        /* return $this->belongsTo('App\User', 'foreign_key'); */
        return $this->belongsTo('App\Curso', 'cod_curso', 'cod_curso');
    }
    public function setCursoIdAttribute()
    {
        $curso = Curso::where('cod_curso', 'cod_curso')->first;
        return $curso->id;
    }
    public function setGrupoIdAttribute()
    {
        $grupo = Grupo::where('cod_grupo', 'cod_grupo')->first;
        return $grupo->id;
    }
}
