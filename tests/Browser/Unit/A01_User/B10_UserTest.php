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

class B10_UserTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_create_a_new_user()
    {
//$this->markTestSkipped('must be revisited.');
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            $facultad_id = 1;
            $sede_id = 1; 
 
            $admin = $this->defaultUser();
            $this->defaultDataUser($admin);
            
            $type_admin = Type::where('name', 'Administrador')->first();
            $var = $this->authUser($admin->id, $facultad_id, $sede_id, $type_admin->id);
            
            $browser->loginAs($admin)
                    ->visit('/home')
                    ->select('facultad_id', $facultad_id)
                    ->select('sede_id', $sede_id)
                    ->press('Acceder')
                    ->waitForText('Inicio', 0.5*60)
                    ->assertSee('Usuarios')
                    ->waitForText('Tipo de usuario: Administrador', 0.5*60)
                    ->visit('/administrador/user/index')
                    ->assertPathIs('/administrador/user/index')
                    ->waitForText('Lista de Usuarios', 0.5*60)
                    ->visit("/administrador/user/create")
                    ->assertPathIs('/administrador/user/create')
                    ->waitForText('Crear Nuevo Usuario', 1*60)
                    ->type('name', 'John Doe')
                    ->type('email', 'jd@gmail.com')
                    ->type('password', 'secret')
                    ->press('Registrar')
                    ->assertSee('Lista de Usuarios')
                    ->assertSee('Se ha registrado John Doe de forma exitosa');
        });
        session()->flush();
    }
}
