<?php

namespace Tests\Browser\Pages;

class UnauthenticatedPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/';
    }

    /**
     * Get the element shortcuts for the page.\
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@login-link' => '.links:first-child',
            '@register-link' => '.links:last-child',
        ];
    }
}