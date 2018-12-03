<?php

namespace Tests\Browser\unit\D01_Disponibilidad;

use App\Acceso;
use App\Denvio;
use App\Menvio;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class D10_DHorasTest extends DuskTestCase
{
    use DatabaseMigrations;

    function test_edit_a_dhora()
    {
        $this->artisan('db:seed');

        $user_id = 4;
        $user = User::find($user_id);
        $facultad_id = 1;
        $sede_id = 1;
        
        $this->browse(function(Browser $browser) use ($user_id, $user, $facultad_id, $sede_id)
        {
            $adm_id = 2; // Administrador
            $menvio = Menvio::create([
                'user_id' => 1,
                'facultad_id' => $facultad_id,
                'sede_id' => $sede_id,
                'fenvio' => date('Y-m-d'),
                'flimite' => date('Y-m-d'),
                'tx_need' => 'asdf',
                'tipo' => 'disp',
                'sw_envio' => 1,
            ]);
            $denvio = Denvio::create([
                'user_id' => $user->id,
                'sw_envio' => 1,
                'tipo' => 'disp',
                'menvio_id' => $menvio->id,
                'email_to' => '@gmail.com',
                ]);
            
            $acceso = Acceso::where('facultad_id', 1)->where('sede_id', 1)->where('user_id', $adm_id)->first();
            $acceso->disp_id = $denvio->id;
            $acceso->save();

            $browser->loginAs(User::find($adm_id))
                    ->visit('/home')
                    ->select('facultad_id', $facultad_id)
                    ->select('sede_id', $sede_id)
                    ->press('Acceder')
                    ->pause(2500)
                    ->waitForText('Inicio')
                    ->assertSee('Usuarios')
                    ->visit('/administrador/user/index')
                    ->assertPathIs('/administrador/user/index')
                    ->visit("/administrador/dhora/edit/{$user->id}")
                    ->check('D1_H11')
                    ->check('D1_H12')
                    ->check('D1_H13')
                    ->check('D1_H31')
                    ->press('Grabar modificaciones')
                    ->assertSee('Se ha registrado ', 30)
                    ->assertSee(' de disponibilidad horaria de forma exitosa');
        });

        $this->assertDatabaseHas('dhoras',[
          'facultad_id' => $facultad_id,
          'sede_id' => $sede_id,
          'user_id' => $user->id,
          'wfranja' => 'D1_H11'
        ]);

        $this->assertDatabaseHas('dhoras',[
          'facultad_id' => $facultad_id,
          'sede_id' => $sede_id,
          'user_id' => $user->id,
          'wfranja' =>'D1_H12',
        ]);

        $this->assertDatabaseHas('dhoras',[
          'facultad_id' => $facultad_id,
          'sede_id' => $sede_id,
          'user_id' => $user->id,
          'wfranja' =>'D1_H13',
        ]);

        $this->assertDatabaseHas('dhoras',[
          'facultad_id' => $facultad_id,
          'sede_id' => $sede_id,
          'user_id' => $user->id,
          'wfranja' =>'D1_H31',
        ]);

    }
}
