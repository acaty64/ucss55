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

class B10_UsersTest extends TestCase
{
    /**
     * @test
     * @medium
     */
   function list_the_users()
   {
      //Having an administrator user
      $user = $this->defaultUser();
      $facultad_id = 1;
      $sede_id = 1;
      $type_id = Type::where('name','Administrador')->first()->id;

      // Primero se logea
      $response = $this->actingAs($user);

      $this->authUser($user->id, $facultad_id, $sede_id, $type_id);

      $view = "admin.user.index";
      // Then
      $response = $this->get('administrador/user/index')
          ->assertViewIs("admin.user.index")
          ->assertStatus(200);

   }

    /** @test */
	function create_a_new_user()
   {
  		//Having an administrator user
      $admin = $this->defaultUser();
      $dataAdmin = $this->defaultDataUser($admin);

      $facultad_id = 1;
      $sede_id = 1;
      $type_id = Type::where('name','Administrador')->first()->id;
      $this->authUser($admin->id, $facultad_id, $sede_id, $type_id);

      // When
      $response = $this->actingAs($admin);

      $newUser = [
          'name'=>'John Doe',
          'email'=> 'jd@gmail.com',
        	'password'=>bcrypt('secret')
         ];

      $cdocente = DataUser::first()->newcodigo();

      $response = $this->post('administrador/user/store', $newUser);

      //Then
      $this->assertDatabaseHas('users',[
        'name'=>'John Doe',
        'email'=> 'jd@gmail.com',
      ]);
      
      $user_id = User::where('name','John Doe')->first()->id;
    
      $this->assertDatabaseHas('datausers',[
        'user_id' => $user_id,
     		'wdoc1'=> 'John Doe',
        'cdocente' => $cdocente,
        'email1'=> 'jd@gmail.com'
      ]);

      $this->assertDatabaseHas('accesos',[
        'user_id'=> $user_id,
        'facultad_id' => $facultad_id,
        'sede_id'=> $sede_id,
        'type_id'=> 2
      ]);
	}

}