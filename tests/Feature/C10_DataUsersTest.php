<?php

namespace Tests\Feature;

use App\Acceso;
use App\DataUser;
use App\Type;
use App\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class C10_DataUsersTest extends TestCase
{
  use DatabaseMigrations;
  /** @test */
  function an_administrator_edit_the_datauser_of_docente()
  {
    Artisan::call('db:seed');
      $facultad_id = 1;
      $sede_id = 1;

    // Having a user
    $user = $this->defaultUser();
    $datauser = $this->defaultDataUser($user);
    $type_id = Type::where('name','Docente')->first()->id;
    $this->authUser($user->id, $facultad_id, $sede_id, $type_id);

    //Having an administrator user
    $admin = $this->defaultUser();
    $datauser = $this->defaultDataUser($admin);
    $type_id = Type::where('name','Administrador')->first()->id;
    $this->authUser($admin->id, $facultad_id, $sede_id, $type_id);

    $response = $this->actingAs($admin);

    $response = $this->get("administrador/datauser/edit/{$user->id}")
        ->assertStatus(200);
    //When
    $new_values = DataUser::where('user_id',$user->id)->first();

    $new_values->wdoc1= 'John';
    $new_values->wdoc2= 'Doe';
    $new_values->wdoc3= 'Smith';
    $new_values->cdocente = '000050';
    $new_values->fono1 = '555-555-555';
    $new_values->fono2 = '333-333-333';
    $new_values->email1 = 'jd@gmail.com';
    $new_values->email2 = 'jd2@gmail.com';
    // $new_values->whatsapp = true;

    $response = $this->put("administrador/datauser/update", $new_values->toArray());
    //Then 
    $this->assertDatabaseHas('datausers',[
      'wdoc1'=> 'John',
      'wdoc2'=> 'Doe',
      'wdoc3'=> 'Smith',
      'cdocente' => '000050',
      'fono1' => '555-555-555',
      'fono2' => '333-333-333',
      'email1' => 'jd@gmail.com',
      'email2' => 'jd2@gmail.com',
      // 'whatsapp' => true,
    ]);
  }

  /** @test */
  function a_consulta_edit_his_datauser()
  {
    Artisan::call('db:seed');
      $facultad_id = 1;
      $sede_id = 1;

    //Having a user CONSULTA
    $user = $this->defaultUser();
    $datauser = $this->defaultDataUser($user);
    $type_id = Type::where('name','Consulta')->first()->id;
    $this->authUser($user->id, $facultad_id, $sede_id, $type_id);

    $response = $this->actingAs($user);

    //When
    $modi_id = $user->id;
    $new_values = DataUser::where('user_id',$modi_id)->first();

    $new_values->wdoc1= 'John';
    $new_values->wdoc2= 'Doe';
    $new_values->wdoc3= 'Smith';
    $new_values->fono1 = '555-555-555';
    $new_values->fono2 = '333-333-333';
    $new_values->email2 = 'jd2@gmail.com';
    // $new_values->whatsapp = true;

    $response = $this->put("consulta/datauser/update", $new_values->toArray());
    //Then 
    $this->assertDatabaseHas('datausers',[
      'wdoc1'=> 'John',
      'wdoc2'=> 'Doe',
      'wdoc3'=> 'Smith',
      'fono1' => '555-555-555',
      'fono2' => '333-333-333',
      'email2' => 'jd2@gmail.com',
      // 'whatsapp' => true,
    ]);
  }

  /** @test */
  function a_docente_edit_his_datauser()
  {
    Artisan::call('db:seed');
    $facultad_id = 1;
    $sede_id = 1;

    //Having a user DOCENTE
    $user = $this->defaultUser();
    $datauser = $this->defaultDataUser($user);
    $type_id = Type::where('name','Docente')->first()->id;
    $this->authUser($user->id, $facultad_id, $sede_id, $type_id);

    $response = $this->actingAs($user);

    //When
    $modi_id = $user->id;
    $new_values = DataUser::where('user_id',$modi_id)->first();

    $new_values->wdoc1= 'John';
    $new_values->wdoc2= 'Doe';
    $new_values->wdoc3= 'Smith';
    $new_values->fono1 = '555-555-555';
    $new_values->fono2 = '333-333-333';
    $new_values->email2 = 'jd2@gmail.com';
    // $new_values->whatsapp = true;

    $response = $this->put("docente/datauser/update", $new_values->toArray());
    //Then 
    $this->assertDatabaseHas('datausers',[
      'wdoc1'=> 'John',
      'wdoc2'=> 'Doe',
      'wdoc3'=> 'Smith',
      'fono1' => '555-555-555',
      'fono2' => '333-333-333',
      'email2' => 'jd2@gmail.com',
      // 'whatsapp' => true,
    ]);
  }

  /** @test */
  function a_responsable_edit_his_datauser()
  {
    Artisan::call('db:seed');
    $facultad_id = 1;
    $sede_id = 1;

    //Having a user DOCENTE
    $user = $this->defaultUser();
    $datauser = $this->defaultDataUser($user);
    $type_id = Type::where('name','Responsable')->first()->id;
    $this->authUser($user->id, $facultad_id, $sede_id, $type_id);

    $response = $this->actingAs($user);

    //When
    $modi_id = $user->id;
    $new_values = DataUser::where('user_id',$modi_id)->first();

    $new_values->wdoc1= 'John';
    $new_values->wdoc2= 'Doe';
    $new_values->wdoc3= 'Smith';
    $new_values->fono1 = '555-555-555';
    $new_values->fono2 = '333-333-333';
    $new_values->email2 = 'jd2@gmail.com';
    // $new_values->whatsapp = true;

    $response = $this->put("responsable/datauser/update", $new_values->toArray());
    //Then 
    $this->assertDatabaseHas('datausers',[
      'wdoc1'=> 'John',
      'wdoc2'=> 'Doe',
      'wdoc3'=> 'Smith',
      'fono1' => '555-555-555',
      'fono2' => '333-333-333',
      'email2' => 'jd2@gmail.com',
      // 'whatsapp' => true,
    ]);
  }
  
}