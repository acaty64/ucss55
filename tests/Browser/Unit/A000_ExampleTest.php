<?php

namespace Tests\Browser\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A000_ExampleTest extends DuskTestCase
{
    public function testBasicExample()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('Bienvenidos');
        });
    }

}
