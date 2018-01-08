<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class A01_AccessTest extends TestCase
{
    /**
     * @test
     */
    public function init_access()
    {
        $this->get('/')
        	->assertStatus(200);
    }

    /**
     * @test
     */
    function auth_access()
    {
        // Having
        $user = User::create([
                'name' => 'Jane Doe',
                'email' => 'jdoe@gmail.com',
                'password'  => bcrypt('secret')
            ]);
        // Check database
        $this->assertDatabaseHas('users',[
            'name' => 'Jane Doe',
            'email' => 'jdoe@gmail.com'
        ]);

        // Acting
        $response = $this->actingAs($user)
            ->get('/home')
            ->assertStatus(200)
            ->AssertSeeText('Facultad y Sede');
    }
}
