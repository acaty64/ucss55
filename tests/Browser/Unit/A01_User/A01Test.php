<?php

namespace Tests\Browser\Unit\A01_User;

use App\Acceso;
use App\User;
use App\Type;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A01Test extends DuskTestCase
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
            $type = Type::where('name', 'Consulta')->first();
            $this->authUser($user->id, $facultad_id, $sede_id, $type->id);
 
            $admin = $this->defaultUser();
            $type = Type::where('name', 'Administrador')->first();
            $this->authUser($admin->id, $facultad_id, $sede_id, $type->id);

            $browser->loginAs($admin)
                    ->visit('/home')
                    ->select('facultad_id', $facultad_id)
                    ->select('sede_id', $sede_id)
                    ->press('Acceder')
//                    ->pause(2500)
                    ->waitForText('Inicio', 1*60)
                    ->assertSee('Usuarios')
                    ->visit('/administrador/user/index')
                    ->assertPathIs('/administrador/user/index')
                    ->visit("/administrador/acceso/edit/{$user->id}")
                    ->assertPathIs("/administrador/acceso/edit/{$user->id}")
                    ->select('type_id',3)
                    ->press('Grabar modificaciones')
                    ->assertSee('Se ha modificado el usuario: ' . $user->id . ' : ' . $user->datauser->wdoc2 . " " . $user->datauser->wdoc3 . ", " . $user->datauser->wdoc1 . ' de forma exitosa')
                    ;

        });
    }
}
