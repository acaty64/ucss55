<?php

namespace Tests\Unit;

use App\Acceso;
use App\RHora;
use App\DataUser;
use App\Franja;
use App\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class D01_RhorasTest extends TestCase
{
  use DatabaseMigrations;    
  function test_an_administrator_edit_a_RHora()
  {
    $this->artisan('db:seed');
    //Having an administrator user
    $adminuser = User::find(2);
    $facultad_id = 1;
    $sede_id = 1;
    /* A user for a edit */
    $user = factory(User::class)->create();
    $datauser = factory(DataUser::class)->create(['user_id'=>$user->id, 'cdocente' => str_pad($user->id, 6, '0', STR_PAD_LEFT)]);
    $this->authUser($user->id, $facultad_id, $sede_id, 3);

    // Asignacion de valores en Session del administrador
    $this->authUser($adminuser->id, $facultad_id, $sede_id, 5);
    $response = $this->actingAs($adminuser);   

    $response = $this->get("administrador/rhora/edit/{$user->id}")
      ->assertStatus(200);
      
    //When
    $request = [
      'facultad_id' =>  $facultad_id,
      'sede_id' =>  $sede_id,
      'rhoras' => [ 
          [
            'id' => 4,
            'rhoras' =>  10
          ],
        ],
      ];

    $response = $this->post("api/rhoras/save", $request);

    //Then 
    $this->assertDatabaseHas('rhoras',[
      'facultad_id' => $facultad_id,
      'sede_id' => $sede_id,
      'user_id' => 4,
      'rhoras' => 10
    ]);

	}
}