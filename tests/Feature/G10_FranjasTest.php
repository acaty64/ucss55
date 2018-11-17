<?php

namespace Tests\Unit;

use App\Acceso;
use App\Franja;
use App\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class G10_FranjasTest extends TestCase
{
  use DatabaseMigrations;
  function test_an_administrator_get_franjas()
  {
    Artisan::call('db:seed');
    //Having an administrator user
    $user = User::find(5);
    $response = $this->actingAs($user);

    $facultad_id = 1;
    $sede_id = 1;
    $type_id = 5;
    Acceso::setAccesoAttributes($facultad_id, $sede_id, $type_id);
    $this->get("administrador/franjas/index")
        ->assertStatus(200);
  }

  function test_an_administrator_create_a_franja()
  {
    Artisan::call('db:seed');
    //Having an administrator user
    $user = User::find(5);
    $response = $this->actingAs($user);

    $facultad_id = 1;
    $sede_id = 1;
    $type_id = 5;
    Acceso::setAccesoAttributes($facultad_id, $sede_id, $type_id);

    $data = [
      'dia' => 1, 
      'turno' => 1, 
      'hora' => 4, 
      'wfranja' => '13:30-15:00',
    ];

    $response = $this->post("administrador/franjas/store", $data);
    $response->assertRedirect('administrador/franjas/index');
    //$response->assertSee('Se ha registrado la franja');
    //Then 
    $this->assertDatabaseHas('franjas',[
      'facultad_id' => 1,
      'sede_id' => 1,
      'dia' => 1, 
      'turno' => 1, 
      'hora' => 4, 
      'wfranja' => '13:30-15:00',
    ]);
	}

  function test_an_administrator_cant_create_an_exists_franja()
  {
    Artisan::call('db:seed');
    //Having an administrator user
    $user = User::find(5);
    $response = $this->actingAs($user);

    $facultad_id = 1;
    $sede_id = 1;
    $type_id = 5;
    Acceso::setAccesoAttributes($facultad_id, $sede_id, $type_id);

    $data = [
      'dia' => 1, 
      'turno' => 1, 
      'hora' => 3, 
      'wfranja' => '12:30-14:30',
    ];

    $response = $this->post("administrador/franjas/store", $data)
        ->assertRedirect('administrador/franjas/create');
    //Then 
    $this->assertDatabaseMissing('franjas',[
      'facultad_id' => 1,
      'sede_id' => 1,
      'dia' => 1, 
      'turno' => 1, 
      'hora' => 4, 
      'wfranja' => '12:30-14:30',
    ]);
  }

  function test_an_administrator_can_destroy_a_franja()
  {
    Artisan::call('db:seed');
    //Having an administrator user
    $user = User::find(5);
    $response = $this->actingAs($user);

    $facultad_id = 1;
    $sede_id = 1;
    $type_id = 5;
    Acceso::setAccesoAttributes($facultad_id, $sede_id, $type_id);

    $id = 1;
    $data = Franja::find($id)->get();

    $response = $this->get("administrador/franjas/destroy/{$id}")
        ->assertRedirect('administrador/franjas/index');

    //Then 
    $this->assertDatabaseMissing('franjas',[
      'id' => $id
    ]);
  }
}