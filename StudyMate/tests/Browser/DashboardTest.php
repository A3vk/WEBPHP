<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DashboardTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    /** @test */
    public function canSeeDashboard()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $browser->visit('/')
                        ->assertDontSee('Admin')
                        ->assertDontSee('Deadline')
                        ->assertSee('Blok 1');
            });
        });
    }

    /** @test */
    public function canSwitchPeriodDashboard()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $browser->visit('/')
                        ->press('Periode 2')
                        ->clickLink('Blok 6')
                        ->waitForText('Blok 6')
                        ->assertSee('Blok 6');
            });
        });
    }
}
