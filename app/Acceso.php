<?php

namespace App;

use App\DataUser;
use App\Facultad;
use App\Menvio;
use App\Rhora;
use App\Sede;
use App\Type;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;


class Acceso extends Model
{
    protected $table = 'accesos';
    protected $append = [
            'rhoras'
        ];
    protected $fillable = [
        'user_id', 'sede_id', 'facultad_id', 'type_id', 'swcierre', 'wdocente', 'dhora', 'dcurso', 'carga'
    ];

    protected function setAccesoAttributes($facultad_id, $sede_id, $type_id)
    {
        \Session::put('facultad_id', $facultad_id, 60);
        \Session::put('cfacultad', Facultad::find($facultad_id)->cfacultad, 60);
        \Session::put('wfacultad', Facultad::find($facultad_id)->wfacultad, 60);
        \Session::put('sede_id', $sede_id, 60);
        \Session::put('csede', Sede::find($sede_id)->csede, 60);
        \Session::put('wsede', Sede::find($sede_id)->wsede, 60);
        \Session::put('type_id', $type_id, 60);
        \Session::put('ctype', Type::find($type_id)->name, 60);

    }

    public function getWdocenteAttribute()
    {
        return DataUser::where('user_id',$this->user_id)->first()->wdocente();
    }

    public function getRhorasAttribute()
    {
        $rhora = Rhora::where('facultad_id',$this->facultad_id)
                    ->where('sede_id',$this->sede_id)
                    ->where('user_id',$this->user_id)
                    ->first();
     
        if($rhora){
            return $rhora->rhoras;
        }else{
            return 0;
        }
    }

    public function getCdocenteAttribute()
    {
        return DataUser::where('user_id',$this->user_id)->first()->cdocente;
    }

    public function getCtypeAttribute()
    {
        return Type::find($this->type_id)->name;
    }

    public function getCfacultadAttribute()
    {
        return Facultad::find($this->facultad_id)->cfacultad;
    }

    public function getWfacultadAttribute()
    {
        return Facultad::find($this->facultad_id)->wfacultad;
    }

    public function getCsedeAttribute()
    {
        return Sede::find($this->sede_id)->csede;
    }

    public function getWsedeAttribute()
    {
        return Sede::find($this->sede_id)->wsede;
    }

    // Funciones
    protected function acceso_auth()
    {
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        return Acceso::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->where('user_id', auth()->user()->id)->first();
    }

    protected function acceso_disponibilidad()
    {
        $facultad_id = \Session::get('facultad_id');
        // $facultad_id = Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        // $sede_id = Session::get('sede_id');
        $todos = Acceso::where('facultad_id',$facultad_id)->where('sede_id',$sede_id)->get();
        $accesos = collect([]);        
        foreach ($todos as $acceso) {
            if ($acceso->ctype != 'Master' && $acceso->ctype != 'Consulta') 
            {
                if($acceso->rhoras > 0){
                    $accesos->push($acceso->user);
                }
            }
        }
        return $accesos;       
    }

    // Scope por nombre y tipo    
    public function scopeSearch($filter, $name, $type = null)
    {
        if(!empty($name)){
            $filter = $filter->where('wdocente', "LIKE", "%$name%");
        }
        if (!empty($type))
        {
            //$filter = $filter->where($this->type_id, $type);
            $filter = $filter->where('type_id', $type);
        }
        return $filter;
    }

    // Relationship
    public function user()
    {
        /* return $this->belongsTo('App\User', 'foreign_key'); */
        return $this->belongsTo('App\User');
    }

    public function type()
    {
        /* return $this->belongsTo('App\User', 'foreign_key'); */
        return $this->belongsTo('App\Type');
    }


}
