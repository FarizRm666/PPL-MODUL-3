<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ResgisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type(field: 'name', value: 'Test')
                    ->type(field: 'email', value: 'ikiii6@gmail.com')
                    ->type(field: 'password', value: '12345678')
                    ->type(field: 'password_confirmation', value: '12345678')
                    ->press(button: 'REGISTER')
                    ->assertPathIs('/dashboard');


                    
        });
    }
}
