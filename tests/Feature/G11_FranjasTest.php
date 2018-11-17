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
use Tests\TestCase;

class G11_FranjasTest extends TestCase
{
  use DatabaseMigrations;
  function test_an_administrator_can_edit_a_franja()
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

    $response = $this->get("administrador/franjas/edit/{$id}")
      ->assertStatus(200);

    $data = Franja::find($id);
    $data->dia = 1; 
    $data->turno = 1; 
    $data->hora = 1; 
    $data->wfranja = '13:30-15:00';

    $response = $this->put("administrador/franjas/update", $data->toArray());
    $response->assertRedirect('administrador/franjas/index');

    //Then 
    $this->assertDatabaseHas('franjas',[
      'id' => 1,
      'facultad_id' => 1,
      'sede_id' => 1,
      'dia' => 1, 
      'turno' => 1, 
      'hora' => 1, 
      'wfranja' => '13:30-15:00',
    ]);
	}

/*
  function test_an_administrator_can_not_edit_an_existed_franja()
  {
    //Having an administrator user
    $user = User::find(5);
    $response = $this->actingAs($user);

    $facultad_id = 1;
    $sede_id = 1;
    $type_id = 5;
    Acceso::setAccesoAttributes($facultad_id, $sede_id, $type_id);

    $id = 1;

    $response = $this->get("administrador/franjas/edit/{$id}")
      ->assertStatus(200);

    $data = Franja::find($id);
    $data->dia = 1; 
    $data->turno = 1; 
    $data->hora = 2; 
    $data->wfranja = '13:30-15:00';

    $response = $this->put("administrador/franjas/update", $data->toArray());
    $response->assertRedirect('administrador/franjas/edit/1');
    
    //Then 
    $this->assertDatabaseMissing('franjas',[
      'id' => 1,
      'facultad_id' => 1,
      'sede_id' => 1,
      'dia' => 1, 
      'turno' => 1, 
      'hora' => 2, 
      'wfranja' => '13:30-15:00',
    ]);
  }
*/
}