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

class B11_UserTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_edit_a_user()
    {
//$this->markTestSkipped('must be revisited.');
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            $facultad_id = 1;
            $sede_id = 1; 

            $user = $this->defaultUser();
            $this->defaultDataUser($user);
 
            $admin = $this->defaultUser();
            $this->defaultDataUser($admin);            
            $type_admin = Type::where('name', 'Administrador')->first();
            $var = $this->authUser($admin->id, $facultad_id, $sede_id, $type_admin->id);
            
            $browser->loginAs($admin)
                    ->visit('/home')
                    ->select('facultad_id', $facultad_id)
                    ->select('sede_id', $sede_id)
                    ->press('Acceder')
                    ->waitForText('Inicio')
                    ->assertSee('Usuarios')
                    ->waitForText('Tipo de usuario: Administrador')
                    ->visit('/administrador/user/index')
                    ->assertPathIs('/administrador/user/index')
                    ->waitForText('Lista de Usuarios')
                    ->visit("/administrador/user/edit/".$user->id)
                    ->assertPathIs("/administrador/user/edit/".$user->id)
                    ->waitForText('Modificar Usuario')
                    ->type('name', 'John Doe')
                    ->type('email', 'jd@gmail.com')
                    ->press('Grabar modificaciones')
                    ->waitForText('Lista de Usuarios', 1*60)
                    ->assertSee('Se ha modificado el registro: ' . $user->id . ' : John Doe de forma exitosa')
                    ->waitForText('Consulta');
        });
    }
}
