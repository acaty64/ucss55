<?php

namespace Tests;

use App\Acceso;
use App\DataUser;
use App\Facultad;
use App\Sede;
use App\Type;
use App\User;
//use Illuminate\Support\Facades\Session;

//use Illuminate\Contracts\Console\Kernel;

trait TestsHelper
{
    protected $defaultUser;
    protected $defaultDataUser;
    protected $authUser;

    public function defaultUser(array $attributes = [])
    {
/*
        if($this->defaultUser){
            return $this->defaultUser;
        }
*/
        return $this->defaultUser = factory(User::class)->create($attributes);
    }


    public function defaultDataUser(User $user)
    {
/*
        if($this->defaultDataUser){
            return $this->defaultDataUser;
        }
*/
        if(DataUser::first()){
            $cdocente = DataUser::find(1)->newcodigo();
        }else{
            $cdocente = 900000;
        }
        return $this->defaultDataUser = factory(DataUser::class)
            ->create([
                'user_id' => $user->id,
                'cdocente' => $cdocente,
                'wdoc1' => $user->name,
                'email1' => $user->email,
            ]);        
    }

    public function authUser($user_id, $facultad_id, $sede_id, $type_id)
    {
    	$acceso = Acceso::create([
    		'user_id' => $user_id,
    		'facultad_id' => $facultad_id,
    		'sede_id' => $sede_id,
    		'type_id' => $type_id
    		]);

        Acceso::setAccesoAttributes($facultad_id, $sede_id, $type_id);

        return $acceso;
    }

}
