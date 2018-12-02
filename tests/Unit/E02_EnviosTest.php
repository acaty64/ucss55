<?php

namespace Tests\Unit;

use App\DataUser;
use App\Denvio;
use App\Menvio;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class E02_EnviosTest extends TestCase
{    
  use DatabaseMigrations;
  function test_an_administrator_create_denvios()
    {
      $this->artisan('db:seed');
    //Having an administrator user
    $adminuser = factory(User::class)->create();
    $facultad_id = 1;
    $sede_id = 1;

    $datauser = factory(DataUser::class)->create([
          'user_id' => $adminuser->id,
          'cdocente' => str_pad($adminuser->id, 6, '0', STR_PAD_LEFT)
        ]);
    $this->authUser($adminuser->id, $facultad_id, $sede_id, 5);

    $response = $this->actingAs($adminuser);
    /* Crea el menvio */
    $hoy = Carbon::now();
    $flimite = $hoy->addDays(5);
    $request = [
      'user_id'     => $adminuser->id,
      'facultad_id' => $facultad_id,
      'sede_id'     => $sede_id,
      'fenvio'      => date('Y-m-d'),
      'flimite'     => $flimite->toDateString(),
      'tx_need'     => 'Prueba de envio.',
      'tipo'        => 'disp'
    ];
    $menvio = new Menvio($request);
    $menvio->save();

    // $id = Menvio::all()->first()->id;

    $response = $this->get("administrador/denvios/define/{$menvio->id}");
    $response->assertStatus(200);

    $request = [
      'id' => 1,
      'checked' => [2,3]
    ];  

    //Then 
    $response = $this->post("api/envio/save",$request);

    $user2 = User::find(2);
    $user3 = User::find(3);
    $this->assertDatabaseHas('denvios',[
      'user_id'     => $user2->id, 
      'menvio_id'   => $menvio->id,
      'tipo'        => 'disp'
    ]);

    $this->assertDatabaseHas('denvios',[
      'user_id'     => $user3->id, 
      'menvio_id'   => $menvio->id,
      'tipo'        => 'disp'
    ]);

  }
}