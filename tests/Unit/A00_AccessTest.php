<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class A00_AccessTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * @test
     */
    public function get_MenuApi()
    {
        Artisan::call('db:seed');
        // Having
        $user = $this->defaultUser();

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

    /** @test 
    public function a_guest_cant_get_API($value='')
    {
        Artisan::call('db:seed');
        // $this->markTestIncomplete(
        //   'This test has not been implemented yet.'
        // );
        $this->get('api/generar/1/1')
            ->assertStatus(302);
    }
    */
}
