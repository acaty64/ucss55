<?php

namespace Tests\Feature;

use App\Acceso;
use App\DataUser;
use App\User;
use App\Type;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class B12_UsersTest extends TestCase
{
    /** @test */
   function consulta_can_list_users()
   {
      //Having an consulta user
      $user = $this->defaultUser();
      $facultad_id = 1;
      $sede_id = 1;
      $type_id = Type::where('name','Consulta')->first()->id;

      // Primero se logea
      $response = $this->actingAs($user);

      $this->authUser($user->id, $facultad_id, $sede_id, $type_id);

      $view = "admin.user.index";
      // Then
      $response = $this->get('consulta/user/index')
          ->assertViewIs($view)
          ->assertStatus(200);
   }

}