<?php

namespace Tests\Unit;

use App\Acceso;
use App\Facultad;
use App\Sede;
use App\Type;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class A02_AccessTest extends TestCase
{
    /**
     * @test
     */
    function administrador_Access()
    {
        // Having
        $user = factory(User::class)->create(); 
        //factory(User::class)->make();

        $type = Type::where('name', 'Administrador')->first();
        $facultad = Facultad::find(1);
        $sede = Sede::find(1);
        
        $request = [
                'facultad_id' => $facultad->id,
                'sede_id'   => $sede->id
            ];
/*
        Session::put('facultad_id',$facultad->id);
        Session::put('cfacultad',$facultad->cfacultad);
        Session::put('sede_id',$sede->id);
        Session::put('csede',$sede->csede);
//dd(Session::all());
*/
        // When
        $this->actingAs($user);
//dd(Auth()->user());
        $this->authUser($user->id, $facultad->id, $sede->id, $type->id);
//dd(\Cache::get('user_id'), \Cache::get('cfacultad'), \Cache::get('csede'), \Cache::get('ctype'));
        $this->post('/home/acceso', $request)
            ->assertStatus(200)
            ->AssertSeeText('Descripción de Opciones');
    }
}
