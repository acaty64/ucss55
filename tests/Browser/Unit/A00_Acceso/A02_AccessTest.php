<?php

namespace Tests\Browser\Unit\A00_Acceso;

use App\Acceso;
use App\User;
use App\Facultad;
use App\Sede;
use App\Type;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A02_AccessTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_edit_an_acceso()
    {
//$this->markTestSkipped('must be revisited.');
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            $facultad_id = 1;
            $sede_id = 1; 

            $user = $this->defaultUser();
            $datauser = $this->defaultDataUser($user);

            $type = Type::where('name', 'Consulta')->first();
            $var = $this->authUser($user->id, $facultad_id, $sede_id, $type->id);
 
            $admin = $this->defaultUser();
            $this->defaultDataUser($admin);
            $type_admin = Type::where('name', 'Administrador')->first();
            $var = $this->authUser($admin->id, $facultad_id, $sede_id, $type_admin->id);
            
            $newFacu_id = Facultad::where('cFacultad', 'FSAL')->first()->id;
            $newSede_id = Sede::where('cSede', 'HUA')->first()->id;
            $newType_id = Type::where('name', 'Docente')->first()->id;

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
                    ->visit("/administrador/acceso/edit/{$user->id}")
                    ->assertPathIs("/administrador/acceso/edit/{$user->id}")
                    ->waitForText('Modificación de acceso', 1.5*60)
                    ->select('facultad_id', $newFacu_id)
                    ->select('sede_id', $newSede_id)
                    ->select('type_id', $newType_id)
                    ->press('Grabar modificaciones')
                    ->waitForText($user->datauser->wdoc1, 1*60)
                    ->assertSee('Se ha modificado el usuario: ' . $user->id . ' : ' . $user->datauser->wdoc2 . " " . $user->datauser->wdoc3 . ", " . $user->datauser->wdoc1 . ' de forma exitosa')
                    ;

        });
    }
}
