<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PagesTest extends DuskTestCase
{
    /** @test */
    public function it_has_a_home_page()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                ->assertSee('Links and form submissions')
                ->assertSee('Modals and slideovers');
        });
    }

    /** @test */
    public function it_redirects_to_the_first_documentation_page()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/docs')
                ->assertPathIs('/docs/introducing-splade');
        });
    }

    /** @test */
    public function it_has_a_navigation_menu_on_desktop()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/docs/introducing-splade')
                ->resize(1024, 768)
                ->assertSeeIn('aside', 'Automatic installation')
                ->assertSeeIn('aside', 'Navigation and routing');
        });
    }

    /** @test */
    public function it_has_a_navigation_slideover_on_mobile()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/docs/introducing-splade')
                ->resize(375, 812)
                ->click('@open-mobile-menu')
                ->waitForText('Automatic installation')
                ->assertSee('Navigation and routing');
        });
    }
}
