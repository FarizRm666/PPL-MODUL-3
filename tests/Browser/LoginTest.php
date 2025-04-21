<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type(field: 'email', value: 'iki@gmail.com')
                    ->type(field: 'password', value: '12345678')
                    ->press(button: 'LOG IN')
                    ->assertPathIs('/dashboard');
        });
    }
}
