<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A00_AccessTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testHome()
    {
        $this->browse(function(Browser $browser)
        {
            // Having
            $user = User::create([
                    'name' => 'Jane Doe',
                    'email' => 'jdoe@gmail.com',
                    'password'  => bcrypt('secret')
                ]);

            $browser->loginAs($user, 'web')
                    ->visit('/home')
                    ->assertPathIs('/home');
        });
    }
}
