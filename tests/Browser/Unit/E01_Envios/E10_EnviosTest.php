<?php

namespace Tests\Browser\unit\E01_Envios;

use App\Acceso;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class E10_EnviosTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_create_and_edit_a_menvio()
    {
        $this->artisan('db:seed');
        $user = User::find(2);  // Usuario que envia los correos
        $this->browse(function(Browser $browser) use($user)
        {
            $browser->loginAs(User::find($user->id))
                    ->visit('/home')
                    ->select('facultad_id','1')
                    ->select('sede_id','1')
                    ->press('Acceder')
                    ->pause(2500)
                    ->waitForText('Inicio')
                    ->assertSee('Usuarios')
                    ->visit('/administrador/menvios/index')
                    ->assertPathIs('/administrador/menvios/index')
                    ->visit('/administrador/menvios/create')
                    ->select('tipo','disp')
                    ->value('#flimite','2017-06-15')
                    ->type('tx_need','Prueba de envio.')
                    ->press('Grabar')
                    ->assertSee('Se ha registrado de forma exitosa')
                    ->click('#Mody1')
                    ->assertPathIs('/administrador/menvios/edit/1')
                    ->type('tx_need','Nuevo texto')
                    ->press('Grabar')
                    ->assertSee('Grupo de Envios modificado exitosamente.')
                    ;
        });
        $this->assertDatabaseHas('menvios',[
          'user_id'     => $user->id, 
          'facultad_id' => 1,
          'sede_id'     => 1,
          'fenvio'      => date('Y-m-d'),
          'flimite'     => '2017-06-15',
          'tx_need'     => 'Nuevo texto',
          'tipo'        => 'disp'
        ]);
    }
}
