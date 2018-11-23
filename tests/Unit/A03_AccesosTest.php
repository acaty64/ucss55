<?php

namespace Tests\Unit;

use App\Acceso;
use App\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class A03_AccesosTest extends TestCase
{
  use DatabaseMigrations;
  function test_an_administrator_edit_the_acceso()
  {

    Artisan::call('db:seed');

    //Having an administrator user
    $user = User::find(5);
    $response = $this->actingAs($user);

    //$this->authUser($user->id, $facultad_id, $sede_id, $type_id);
    $this->authUser($user->id, 1, 1, 5);

    $modi_id = 4;
    $response = $this->get("administrador/acceso/edit/{$modi_id}")
        ->assertStatus(200);

    //When
    $new_values = Acceso::where('user_id',$modi_id)->first();

    $new_values->facultad_id= 2;
    $new_values->sede_id= 3;
    $new_values->type_id= 4;

    $response = $this->put("administrador/acceso/update", $new_values->toArray());
    //Then 
    $this->assertDatabaseHas('accesos',[
      'facultad_id'=> 2,
      'sede_id'=> 3,
      'type_id'=> 4
    ]);
	}
}