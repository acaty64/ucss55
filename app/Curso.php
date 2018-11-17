<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $table = 'mcursos';
	protected $fillable = [
        'cod_curso', 'wcurso',
    ];

    // ********** RELATIONSHIP **********/
    public function cursogrupo()
    {
        /* return $this->belongsTo('App\User', 'foreign_key'); */
        return $this->hasMany('App\CursoGrupo');
    }

}
