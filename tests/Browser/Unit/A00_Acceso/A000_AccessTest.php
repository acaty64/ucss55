<?php

namespace Tests\Browser\Unit\A00_Acceso;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A000_AccessTest extends DuskTestCase
{
    public function testAccess000()
    {
        $this->browse(function(Browser $browser)
        {
            $browser->visit('/')
                ->assertPathIs('/')
                ->waitForText('Bienvenido', 10);
        });
    }
}
