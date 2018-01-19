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
        $user = $this->defaultUser();

        $type = Type::where('name', 'Administrador')->first();
        $facultad = Facultad::find(1);
        $sede = Sede::find(1);
        
        $request = [
                'facultad_id' => $facultad->id,
                'sede_id'   => $sede->id
            ];

        // When
        $this->actingAs($user);

        $this->authUser($user->id, $facultad->id, $sede->id, $type->id);

        $this->post('/home/acceso', $request)
            ->assertStatus(200)
            ->AssertSeeText('Descripción de Opciones');
    }

    /** @test */
    function a_guest_cant_access_home_acceso($value='')
    {
        $request = [
                'facultad_id' => 1,
                'sede_id'   => 1
            ];
        $this->post('/home/acceso', $request)
            ->assertStatus(302);
    }    
}
