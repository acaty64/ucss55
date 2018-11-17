<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class A01_AccessTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function init_access()
    {
        $view = "auth.login";
        $this->get('/')
        	->assertStatus(200);
    }

    /**
     * @test
     */
    function auth_access()
    {
        Artisan::call('db:seed');
        // Having
        $user = $this->defaultUser();

        // Check database
        $this->assertDatabaseHas('users',[
            'name' => $user->name,
            'email' => $user->email
        ]);

        // Acting
        $response = $this->actingAs($user)
            ->get('/home')
            ->assertStatus(200)
            ->AssertSeeText('Facultad y Sede');
    }

    /** @test */
    function a_guest_cant_access_home($value='')
    {
        $this->get('/home')
            ->assertStatus(302);
    }
}
