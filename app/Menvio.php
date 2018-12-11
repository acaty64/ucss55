<?php

namespace App;

use App\DHora;
use App\DCurso;
use Illuminate\Database\Eloquent\Model;

class Menvio extends Model
{
    protected $table = 'menvios';
    protected $append = ['rpta1', 'rpta2'];		
    protected $fillable = [		
    	'user_id', 'facultad_id', 'sede_id','fenvio', 'flimite', 'envio', 
      'tipo', 'tx_need'
    ];	

    public function denvios()
    {
        return $this->hasMany('App\Denvio');
    }

   	protected function getSelectedAttribute()
   	{
   		$cuenta = $this->denvios->count();
   		return $cuenta;
   	}

   	protected function getEnvioAttribute()
   	{
   		$cuenta = $this->denvios->where('sw_envio', '1')->count();
   		return $cuenta;
   	}

}
