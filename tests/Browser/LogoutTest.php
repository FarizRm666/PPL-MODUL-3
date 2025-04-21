<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/login')
                ->type(field: 'email', value: 'iki@gmail.com')
                ->type(field: 'password', value: '12345678')
                ->press(button: 'LOG IN')
                ->assertPathIs('/dashboard')
                ->press('Test')
                ->clickLink('Log Out');
        });
    }
}
