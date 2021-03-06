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

    function test_define_a_menvio_show_and_destroy_it()
    {
      $this->artisan('cache:clear');
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
          $browser->loginAs(User::find(2))
                  ->visit('/home')
                  ->select('facultad_id','1')
                  ->select('sede_id','1')
                  ->press('Acceder')
                  ->waitForText('Inicio', 30)
                  ->assertSee('Usuarios')
                  ->visit('/administrador/menvios/index')
                  ->assertPathIs('/administrador/menvios/index')
                  ->visit('/administrador/menvios/create')
                  ->select('tipo','disp')
                  ->value('#flimite','2019-06-15')
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
            $browser->press('#Regresar')
                  ->waitForText('Seleccionado', 30)
                  ->assertSee('3')
                  ;
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

        $this->browse(function(Browser $browser)
        {
          $browser->visit('/administrador/menvios/index')
                  ->assertSee('3', '#selected1');
        });

        $this->browse(function(Browser $browser)
        {
          $browser->visit('/administrador/menvios/show/1')
                  ->assertSee('Docentes Comunicados');
        });

        /*  Elimina Menvio y sus Denvios*/
        $this->browse(function(Browser $browser)
        {
          $browser->visit('/administrador/menvios/destroy/1')
                  // ->assertSee('Está seguro de eliminar este envio?')
                  // ->press('Aceptar')
                  ->assertSee('Se ha eliminado el grupo de envios: 1 de forma exitosa');
        });
        $this->assertDatabaseMissing('menvios',[
          'id' => 1,
          'facultad_id' => 1,
          'sede_id'   => 1,
          'tipo'        => 'disp'
        ]);

        $this->assertDatabaseMissing('denvios',[
          'user_id' => 1,
          'menvio_id'   => 1,
          'tipo'        => 'disp'
        ]);


    }
}
