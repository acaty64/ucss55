<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class A000_SessionValuesTest extends TestCase
{
    use DatabaseMigrations;
    
    function test_auth_preliminar_value()
    {
        Artisan::call('db:seed');
        // Having
        $user = User::create([
                'name' => 'Jane Doe',
                'email' => 'jdoe@gmail.com',
                'password'  => bcrypt('secret')
            ]);
        $facultad_id = 1;
        $sede_id = 1;

        $this->authUser($user->id, $facultad_id, $sede_id, 2);

        // Acting
        $this->get('/')
            ->assertStatus(200);

        $this->actingAs($user)
            ->get('/home')
            ->assertStatus(200);
    }
}
