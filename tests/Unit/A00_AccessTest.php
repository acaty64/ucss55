<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class A00_AccessTest extends TestCase
{
    public function test_get_MenuApi()
    {
        // Having
        $user = User::find(1);
        /*$user = User::where([
                'name' => 'Jane Doe',
                'email' => 'jdoe@gmail.com',
                'password'  => bcrypt('secret')
            ]);*/
        $array = [
            'name' => 'Inicio',
            'href' => '/home',
            "help" => "Regresa a definir facultad y sede a acceder.",
            "type_id" => 5,
            "menu_id" => 1,            
            'level' => 0,
            'order' => 0,
        ];
        // Acting
        $type_id = '5';  // Administrador
        $auth_id = $user->id ;
        $this->actingAs($user)
            ->get('api/generar/'.$type_id.'/'.$auth_id)
            ->assertJSONFragment($array);
    }
}
