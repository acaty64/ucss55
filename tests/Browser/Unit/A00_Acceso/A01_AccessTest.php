<?php

namespace Tests\Browser\Unit\A00_Acceso;

use App\User;
use App\Type;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A01_AccessTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_a_User_get_access()
    {
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            // Having
            $user = $this->defaultUser();
            $type = Type::where('name', 'Administrador')->first();
            $facultad_id = 1;
            $sede_id = 1; 
                       
            $this->authUser($user->id, $facultad_id, $sede_id, $type->id);

            $browser->loginAs($user)
                    ->visit('/home')
                    ->select('facultad_id',1)
                    ->select('sede_id',1)
                    ->click('@acceder')
                    ->AssertSeeIn('#userType', 'Tipo de usuario: Administrador')
                    ->AssertSee('Descripción de Opciones')
                    ;
        });
        session()->flush();
    }

}
