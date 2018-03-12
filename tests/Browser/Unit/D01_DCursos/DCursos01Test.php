<?php

namespace Tests\Browser\unit\D01_DCursos;

use App\Acceso;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DCursos01Test extends DuskTestCase
{
    use DatabaseMigrations;
/////// TODO: Review all
    function test_edit_a_dcurso()
    { 
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            $user = User::find(4);
            $browser->loginAs(User::find(2))
                    ->visit('/home')
                    ->select('facultad_id','1')
                    ->select('sede_id','1')
                    ->press('Acceder')
                    ->waitFor('@menu-component', 10)
                    ->assertVisible('@menu-component')
                    ->waitForText('Inicio', 10)
                    ->clickLink('Usuarios')
                    ->waitFor('@userindex-component', 30)
                    ->waitForText('Master', 10)
                    ->assertVue('users[0].ctype', 'Master', '@userindex-component')
                    ->assertVue('users[3].ctype', 'Docente', '@userindex-component')
                    ->click('#dcurso3')
                    ->waitFor('@menu-component', 10)
                    ->assertVisible('@menu-component')
                    ->waitFor('@dcursogrupo-component', 10)
                    ->waitFor('@dcursoregistration-component', 10)
                    ->waitFor('@dcursoregistrations-component', 10)
                    ->waitForText('Seleccione')
                    ->assertVisible('@dcursogrupo-component')
                    ->assertVisible('@dcursoregistration-component')
                    ->assertVisible('@dcursoregistrations-component')
                    ->select('#sel_grupos', 'CONTABILIDAD BASICA')
                    ->waitForText('CONTABILIDAD BASICA', 10)
                    ->screenshot('test_edit_a_dcurso_1')
                    ;

        });
        session()->flush();
    }
}
