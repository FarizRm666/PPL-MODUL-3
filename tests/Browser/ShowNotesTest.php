<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNotesTest extends DuskTestCase
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
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Senin 4/21/2025')
                ->assertPathIs('/note/2');
        });
    }
}
