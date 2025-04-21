<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Notes
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
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type(field: 'title', value: 'Selasa 4/21/2025')
                    ->type(field: 'description', value: 'Praktikum PPL Modul 3')
                    ->press(button: 'CREATE');
        });
    }
}
