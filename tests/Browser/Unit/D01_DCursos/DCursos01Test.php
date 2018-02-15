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
                    ->assertVisible('@menu-component')
                    ->waitForText('Inicio')
                    ->clickLink('Usuarios')
                    ->assertVisible('@userindex-component')
                    ->waitForText('Master')
                    ->assertVue('users[0].ctype', 'Master', '@userindex-component')
                    ->assertVue('users[3].ctype', 'Docente', '@userindex-component')
                    ->click('#dcurso3')
                    ->waitForText('Seleccione')
                    ->assertVisible('@dcursogrupo-component')
                    ->assertVisible('@dcursoregistration-component')
                    ->select('#sel_grupos', 'CONTABILIDAD BASICA')
                    ->waitForText('CONTABILIDAD BASICA')
                    ->assertVue('items[0].wcurso', 'CONTABILIDAD BASICA I', '@dcursoregistration-component')
                    ->waitForText('CONTABILIDAD BASICA I')
                    ->waitForText('View')
                    ->clickLink('CONTABILIDAD GERENCIAL')
                    ->assertVisible('@dcursoregistrations-component')
                    ->screenshot('test_edit_a_dcurso')
                    ;
                    
/*


                    ->waitUntil('app.__vue__._isMounted')
                    ->waitUntil('app.__vue__._isMounted')
                    ->screenshot('test_edit_a_dcurso');


 $this->browse(function (Browser $browser) {
            $browser->visit('/test')
                    ->waitFor('#registration')
                    ->assertVisible('@app-registration')
                    ->assertVue('users[0].name', 'Max', '@app-registration')
                    ->clickLink('Max')
                    ->assertVue('registrations[0].name', 'Max', '@app-registrations')
                    ->assertVue('total', '1', '@app-registrations');
        });
*/


//                    ->assertVue('auth_id','2','@menu-component')
/*                    ->assertVue('item.name','Inicio','@menu-component')
                    ->assertSee('Usuarios')
                    ->visit('/administrador/user/index')
                    ->assertPathIs('/administrador/user/index')
                    ->visit("/administrador/dcurso/edit/{$user->id}")
                    ->waitForText('Inicio')
                    ->waitForText('Seleccione el grupo')
                    ->assertVisible('CONTABILIDAD BASICA')
                    ->within('@grupos', function ($browser) {
                        $browser->click('CONTABILIDAD BASICA');
                    })
///                    ->assertVue('item.wgrupo', 'CONTABILIDAD BASICA', '@app-grupo')
                    ->waitForText('CONTABILIDAD BASICA')
                    ->assertSee('CONTABILIDAD BASICA')
                    ->select('#sel_grupos', 'CONTABILIDAD BASICA')
                    ->waitForText('CONTABILIDAD DE COSTOS')
                    ->assertSee('CONTABILIDAD DE COSTOS')
                    ->clickLink('CONTABILIDAD DE COSTOS');
*/


/*                    ->click('.search-field')
                    ->select('cursos[]','3')
                    ->pause(500)
                    ->click('.search-field')
                    ->select('cursos[]', 33)
                    //->select('.select-curso','ADMINISTRACION II')
                    ->click('.search-field')
                    ->press('Grabar o Confirmar cursos')
                    ->assertSee('Se ha registrado la modificación de disponibilidad de cursos de forma exitosa')
                    ->visit("/administrador/dcurso/edit/{$user->id}")
                    ->assertSee('ADMINISTRACION I')
                    ->assertSee('ADMINISTRACION II');
*/
        });
    }
}
