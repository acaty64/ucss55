<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class B01_UserTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * @test
     */
    public function helper_defaultUser()
    {
        // Having

        // Acting
        $user = $this->defaultUser();

        // Then
        // Check database
        $this->assertDatabaseHas('users',[
            'id'    => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ]);        

    }

    /** @test */
    public function helper_defaultDataUser($value='')
    {
        // Acting
        $user = $this->defaultUser();
        $datauser = $this->defaultDataUser($user);

        // Then
        // Check database
        $this->assertDatabaseHas('datausers',[
            'user_id'=> $user->id,
            'wdoc1' => $user->name,
            'email1' => $user->email,
        ]); 
    }
}
