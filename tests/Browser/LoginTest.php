<?php

namespace Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_can_login_a_user()
    {
        $user = factory(User::class)->create([
            'email' => 'login@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(new Login())
                ->type('email', 'login@gmail.com')
                ->type('password', 'password')
                ->press('Login')
                ->assertSee('Dashboard')
                ->assertSee('You are logged in!')
                ->assertSee($user->name);
        });
    }
}