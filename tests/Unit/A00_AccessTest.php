<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class A00_AccessTest extends TestCase
{
    public function testAccess()
    {
        $this->get('/')
        	->assertStatus(200);
    }

    function test_auth_preliminar_value()
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
        $this->get('/login')
            ->assertStatus(200);

        $response = $this->actingAs($user, 'web')
            ->get('/home')
            ->assertStatus(200);
    }
}
