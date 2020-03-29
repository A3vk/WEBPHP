<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class DeadlineTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    /** @test */
    public function dealineLoginShowsAdminButtonOnDashboard()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $browser->visit('/login')
                        ->type('username', 'Deadline')
                        ->type('password', 'Deadline123')
                        ->press('Login')
                        ->visit('/')
                        ->assertSeeLink('Deadline');
            });
        });
    }

    /** @test */
    public function deadlineCanAccessAdminEnvoirment()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $user = new User([
                    'username' => 'Deadline',
                    'password' => 'carl',
                    'role' => 'deadline'
                ]);

                $browser->loginAs($user)
                        ->visit('/')
                        ->clickLink('Deadline Manager')
                        ->AssertPathIs('/deadline/index');
            });
        });
    }

    /** @test */
    public function deadlineCanChangeTestDate()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $user = new User([
                    'username' => 'Deadline',
                    'password' => 'carl',
                    'role' => 'deadline'
                ]);

                $browser->loginAs($user)
                        ->visit('/deadline/index')
                        ->click('@edit')
                        ->keys('#date', '11052023', '{tab}', '2359')
                        ->click('@save')
                        ->assertSee('11-05-2023 23:59');
            });
        });
    }
}
