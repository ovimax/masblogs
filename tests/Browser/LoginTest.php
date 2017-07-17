<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_login_admin()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                    ->clickLink('LOGIN')
                    ->assertPageIs('login')
                    ->type('username','admin')
                    ->type('password','admin')
                    ->press('Enviar')
                    ->assertSee('Bienvenido al Panel de control');

        });
    }
}
