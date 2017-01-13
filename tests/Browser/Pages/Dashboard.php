<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class Dashboard extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/home';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param Browser $browser
     */
    public function assert(Browser $browser)
    {
        $browser->assertTitle('Laravel')
            ->assertSee('Laravel')
            ->assertSee('Dashboard')
            ->assertSee('You are logged in!')
            ->assertVisible('@dropdown');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@dropdown' => '.dropdown-toggle',
        ];
    }
}
