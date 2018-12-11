<?php

namespace Tests\Browser\unit\E01_Envios;

use App\Acceso;
use App\Menvio;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class E12_EnviosTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_mails_sended()
    {
      $this->artisan('cache:clear');
      $this->artisan('db:seed');
      // Menvio
      Menvio::create([
          'user_id' => 1,
          'facultad_id' => 1,
          'sede_id' => 1,
          'fenvio' => '2018-12-15',
          'flimite' =>'2019-06-15',
          'envio' => 0,
          'rpta1' => 0,
          'rpta2' => 0,
          'tipo' => 'disp',
          'tx_need' => 'Requerimiento de Disponibilidad Horaria'
        ]);
      // Envios
      $facultad_id = 1;
      $sede_id = 1;
      $request = [
        'id' => 1,
        'checked' => [2,3,4]
      ];  
      $response = $this->post("api/envio/save",$request);
      // Respuestas: DHORAS
      $doc = User::findOrFail(3);
      $request = [
            'docente_id' => $doc->id,
            'facultad_id' => $facultad_id,
            'sede_id' => $sede_id,
            'checked' => [ 
                  'D1_H11',
                  'D1_H12',
                  'D1_H13',
                  'D1_H31',                  
                ]           
              ];

      $response = $this->post('/api/dhoras/save', $request)
                ->assertStatus(200);

      // Respuestas: DCURSOS
      $cursos = [
          ['curso_id' => 5],
          ['curso_id' => 7],
        ];

      $request = [
          'facultad_id' => $facultad_id,
          'sede_id' => $sede_id,
          'docente_id' => $doc->id,
          'items'  => $cursos
        ];
      $response = $this->post("api/dcurso/update",$request);

      // Verifica vista de datos en Menvios index
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
                ->assertSeeIn('.selected1', '3')
                ->click('#Send1')
                ->assertSeeIn('.sended1', '3')
                ->assertSeeIn('.dhora1', '1')
                ->assertSeeIn('.dcurso1', '1')
                ;

      });
    }
}
