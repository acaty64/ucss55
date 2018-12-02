<?php

namespace Tests\Browser\unit\E01_Envios;

use App\Acceso;
use App\Menvio;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class E11_EnviosTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_define_a_menvio()
    {
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
          $browser->loginAs(User::find(2))
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
                  ->click('#Add1')
                  ->assertPathIs('/administrador/denvios/define/1')
                  ->assertVue('mensaje', 'Marque o desmarque los registros.', '@envio-component');
            $request = [
              'id' => 1,
              'checked' => [2,3,4]
            ];  
            $response = $this->post("api/envio/save",$request);
        });

        $this->assertDatabaseHas('denvios',[
          'user_id'     => 2, 
          'menvio_id'   => 1,
          'tipo'        => 'disp'
        ]);

        $this->assertDatabaseHas('denvios',[
          'user_id'     => 3, 
          'menvio_id'   => 1,
          'tipo'        => 'disp'
        ]);

        $this->assertDatabaseHas('denvios',[
          'user_id'     => 4, 
          'menvio_id'   => 1,
          'tipo'        => 'disp'
        ]);

    }
}
