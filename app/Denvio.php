<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denvio extends Model
{
    protected $table = 'denvios';		
    protected $fillable = [		
    	'user_id', 'menvio_id', 'tipo', 'sw_envio', 'sw_rpta1', 'sw_rpta2'
    ];	

    public function user()
    {
         return $this->belongsTo('App\User');
    }
	
	public function menvio()
    {
         return $this->belongsTo('App\MEnvio');
    }
    /* Requiere array['id'=>menvio_id, 'type'=>tipo]*/
    public function scopeStipo($query, $id_type){
        $id = $id_type['menvio_id'];
        $type = $id_type['type']; 
        return $query->where('menvio_id', '=', $id )->where('tipo', '=', $type) ;
    }
}
