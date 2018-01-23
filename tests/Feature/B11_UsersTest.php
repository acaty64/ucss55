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

class B11_UsersTest extends TestCase
{
  /** @test */
   function edit_a_user()
   {
      //Having an administrator user
      $facultad_id = 1;
      $sede_id = 1;


      $admin = $this->defaultUser();
      $admin_data = $this->defaultDataUser($admin);
      $adm_type_id = Type::where('name','Administrador')->first()->id;
      $this->authUser($admin->id, $facultad_id, $sede_id, $adm_type_id);      

      $user = $this->defaultUser();
      $datauser = $this->defaultDataUser($user);

      // When
      $newValues = User::find($user->id);
      $newValues->name = 'John Doe';
      $newValues->email= 'jd@gmail.com';
      
      $response = $this->actingAs($admin)
          ->put('administrador/user/update', $newValues->toArray());
      
      //Then
      $this->assertDatabaseHas('users',[
        'name'=>'John Doe',
        'email'=> 'jd@gmail.com',
      ]);
  }




}