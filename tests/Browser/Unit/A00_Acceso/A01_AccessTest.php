<?php

namespace Tests\Browser\Unit\A00_Acceso;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A01_AccessTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testAccess()
    {
        $this->browse(function(Browser $browser)
        {
            $browser->visit('/')
                ->assertPathIs('/')
                ->waitForText('E-Mail Address', 10)
            ;
            $user = User::create([
                    'name' => 'Administrador Lima',
                    'email' => 'ucss.fcec.lim@gmail.com',
                    'password'  => bcrypt('secret')
                ]);

            $browser->visit('/')
                ->waitForText('E-Mail Address', 10)
                ->type('email', 'ucss.fcec.lim@gmail.com')
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }
}
