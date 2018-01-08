<?php

namespace Tests\Browser\Unit;

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

    public function testAccess()
    {
        $this->browse(function(Browser $browser)
        {
            $user = User::create([
                    'name' => 'Administrador Lima',
                    'email' => 'ucss.fcec.lim@gmail.com',
                    'password'  => bcrypt('secret')
                ]);
            $browser->visit('/')
                ->type('email', 'ucss.fcec.lim@gmail.com')
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }
}
