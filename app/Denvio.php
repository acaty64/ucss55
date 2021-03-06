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
         return $this->belongsTo('App\Menvio');
    }
    /* Requiere array['id'=>menvio_id, 'type'=>tipo]*/
    public function scopeStipo($query, $data){
        $id = $data['menvio_id'];
        $type = $data['type']; 
        return $query->where('menvio_id', '=', $id )->where('tipo', '=', $type) ;
    }

    public function getWdocenteAttribute()
    {
        return $this->user->datauser->wdocente();
    }

}
