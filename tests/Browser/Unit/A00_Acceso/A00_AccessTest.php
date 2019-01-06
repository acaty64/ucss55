<?php

namespace Tests\Browser\Unit\A00_Acceso;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A00_AccessTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testHome()
    {
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            // Having
            $user = User::create([
                    'name' => 'Jane Doe',
                    'email' => 'jdoe@gmail.com',
                    'password'  => bcrypt('secret')
                ]);
            $this->authUser($user->id, 1, 1, 5);

            $browser->loginAs($user, 'web')
                    ->visit('/home')
                    ->assertPathIs('/home');
        });
    }

}
