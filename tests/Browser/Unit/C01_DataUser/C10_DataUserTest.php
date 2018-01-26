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

class C10_DataUserTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_an_ADMINISTRADOR_can_edit_the_datauser_of_docente()
    {
//$this->markTestSkipped('must be revisited.');
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            $facultad_id = 1;
            $sede_id = 1; 

            $user = $this->defaultUser();
            $datauser = $this->defaultDataUser($user);
            $type = Type::where('name', 'Docente')->first();
            $this->authUser($user->id, $facultad_id, $sede_id, $type->id);
 
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
                    ->visit("/administrador/datauser/edit/{$user->id}")
                    ->type('cdocente','000002')
                    ->type('wdoc1','Nuevo nombre')
                    ->type('wdoc2','Primer Apellido')
                    ->type('wdoc3','Segundo Apellido')
                    ->type('email1','newmail@gmail.com')
                    ->type('email2','otromail@gmail.com')
                    ->check('whatsapp')
                    ->press('Grabar modificaciones')
                    ->assertSee('Se ha modificado el usuario: '.$user->id.' : Primer Apellido Segundo Apellido, Nuevo nombre de forma exitosa');


/*                    
                    ->visit('/administrador/user/index')
                    ->assertPathIs('/administrador/user/index')
                    ->visit("/administrador/user/edit/".$user->id)
                    ->assertPathIs("/administrador/user/edit/".$user->id)
                    ->waitForText('Modificar Usuario')
                    ->type('name', 'John Doe')
                    ->type('email', 'jd@gmail.com')
                    ->press('Grabar modificaciones')
                    ->waitForText('Lista de Usuarios')
                    ->assertSee('Se ha modificado el registro: ' . $user->id . ' : John Doe de forma exitosa');
*/
        });
    }
}
