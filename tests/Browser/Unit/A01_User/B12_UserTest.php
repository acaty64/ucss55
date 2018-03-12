<?php

namespace Tests\Browser\Unit\A01_User;

use App\Acceso;
use App\User;
use App\Facultad;
use App\Sede;
use App\Type;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class B12_UserTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_consulta_list_users()
    {
//$this->markTestSkipped('must be revisited.');
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            $facultad_id = 1;
            $sede_id = 1; 
 
            $user = $this->defaultUser();
            $this->defaultDataUser($user);
            
            $type_admin = Type::where('name', 'Consulta')->first();
            $var = $this->authUser($user->id, $facultad_id, $sede_id, $type_admin->id);
            
            $browser->loginAs($user)
                    ->visit('/home')
                    ->select('facultad_id', $facultad_id)
                    ->select('sede_id', $sede_id)
                    ->press('Acceder')
                    ->waitForText('Inicio', 10)
                    ->assertSee('Usuarios')
                    ->waitForText('Tipo de usuario: Consulta')
                    ->visit('/consulta/user/index')
                    ->assertPathIs('/consulta/user/index')
                    ->waitForText('Lista de Usuarios');
        });
        session()->flush();
    }
}
