<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menvio extends Model
{
    protected $table = 'menvios';
//    protected $append = ['envios'];		
    protected $fillable = [		
    	'user_id', 'facultad_id', 'sede_id','fenvio', 'flimite', 'envio', 'rpta', 'tipo', 'tx_need'
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

   	protected function getRptaAttribute()
   	{
   		$cuenta = $this->denvios->where('sw_rpta', '1')->count();
   		return $cuenta;
   	}
}
