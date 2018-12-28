<?php

namespace App;

use App\Acceso;
use App\Denvio;
use App\Menvio;
use App\Rhora;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Session;

class User extends Authenticatable
{
    use Notifiable;

    protected $append = ['facultad', 'sede', 'type', 'acceder', 'accesos', 'rhora'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $facultad_id, $cfacultad, $sede_id, $csede, $type_id, $ctype;


    public function setAccesosAttributes()
    {
        return $this->belongsToMany(Acceso::class, 'id', 'user_id');
    }

    public function setFacultadAttributes($id, $name)
    {
        $this->facultad_id = $id;
        $this->cfacultad = $name;
    }
    public function setSedeAttributes($id, $name)
    {
        $this->sede_id = $id;
        $this->csede = $name;
    }
    public function setTypeAttributes($id, $name)
    {
        $this->type_id = $id;
        $this->ctype = $name;
    }

    public function getNameLoginAttribute()
    {
        $rpta = substr($this->name, 0, 10);
        if (Session::get('sede_id')) {
            $rpta = $rpta . ' (' . Session::get('cfacultad') . ' - ' . Session::get('csede') . ')';
        }
        if (Session::get('type_id')) {
            $rpta = $rpta . ' (' . substr(Session::get('ctype'),0,6) . ')' ;
        }
        return $rpta;
    }

    public function getCtypeAttribute()
    {
        return $this->ctype;
    }
    public function getAccederAttribute()
    {
        //Acceso::setAccesoAttributes();
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        $ok = Acceso::where('user_id', $this->id)->where('facultad_id', $facultad_id)->where('sede_id', $sede_id)->first();

        if ($ok) {
            Acceso::setAccesoAttributes($facultad_id, $sede_id, $ok->type_id);
            return true;
        } else {
            return false;
        }
    }

    public function getRhoraAttribute()
    {
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        $rhora = Rhora::where('user_id', $this->id)->where('facultad_id', $facultad_id)->where('sede_id', $sede_id)->first();
        if($rhora){
            return $rhora->rhoras;
        }else{
            return 0;
        }
    }

    /************** SCOPEs **********************/
    /** SCOPE apellido paterno */
    public function scopeSdocente($query, $wdocente){
        return $query->where('slug', 'LIKE', "%$wdocente%");
    }
    /** SCOPE tipo de usuario */
    public function scopeStype($query, $type){
        return $query->where('type', '=', "$type");
    }
    
    // Scope por nombre y tipo    
    public function scopeSearch($filter, $name, $type = null)
    {
        $filter = $filter->where('slug', "LIKE", "%$name%");
        if (!empty($type))
        {
            $filter = $filter->where('type', "LIKE", "%$type%");
        }
        return $filter;
    }

    /************* FUNCIONES *************** */

    public static function editable($tipo, $user_id)
    {
        // $user_id = \Session::get('user_id');
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        $type_user = \App\Acceso::acceso_auth()->ctype;
        switch ($type_user) {
            case 'Master':             
                $editable = true;
                break;
            case 'Administrador':
                $editable = true;
                break;
            case 'Responsable' || 'Docente':
                $denvios = Denvio::where('user_id', $user_id)
                            ->where('tipo', $tipo)->get();
                $ultimo = "";
                foreach ($denvios as $denvio) {
                    if($denvio->menvio->flimite > $ultimo){
                        $ultimo = $denvio->menvio->flimite;
                    }
                }
                if( $ultimo > date('Y-m-d')) {
                    $editable = true;
                }else{
                    $editable = false;
                }
                break;
            default:
                $editable = false;
                break;
        }

        return $editable;
    }
    /************ RELATIONSHIPS ******************/
    public function accesos()
    {
        return $this->hasMany('App\Acceso');
    }

    public function datauser()
    {
        return $this->hasOne('App\DataUser');
    }

    public function dcursos()
    {
        $facultad_id = Session::get('facultad_id');
        $sede_id = Session::get('sede_id');
        $dcursos = $this->hasMany('App\DCurso')->where('facultad_id',$facultad_id)->where('sede_id',$sede_id);
        return $dcursos;
    }

    public function denvios()
    {
        return $this->hasMany('App\Denvio');
    }

/***
    public function getTypeAttribute($value='')
    {
        $type_id = $this->type_id;
        if(!$type_id){
            return false;
        }else{
            $ctype = Type::find($type_id)->name;
            return $ctype;
        }
    }

    public function getUserMenuAttribute($value='')
    {
        if($this->acceder){
            $opciones = Menu::where('type_id',$this->type_id)->get();
            return $opciones;            
        }else{
            return false;
        }

    }
*/
}
