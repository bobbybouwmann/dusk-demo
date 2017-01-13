<?php

namespace Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Register;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_can_see_the_register_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Register());
        });
    }

    /** @test */
    public function it_can_register_a_user()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Register())
                ->type('name', 'Bobby Bouwmann')
                ->type('email', 'register@gmail.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('Register')
                ->assertSee('Dashboard')
                ->assertSee('You are logged in!')
                ->assertSee('Bobby Bouwmann');
        });
    }
}