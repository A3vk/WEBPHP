<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class AdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    /** @test */
    public function adminLoginShowsAdminButtonOnDashboard()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $browser->visit('/login')
                        ->type('username', 'Admin')
                        ->type('password', 'Admin123')
                        ->press('Login')
                        ->visit('/')
                        ->assertSee('Admin');
            });
        });
    }

    /** @test */
    public function adminCanAccessAdminEnvoirment()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $user = new User([
                    'username' => 'Admin',
                    'password' => 'carl',
                    'role' => 'admin'
                ]);

                $browser->loginAs($user)
                        ->visit('/')
                        ->clickLink('Admin')
                        ->AssertPathIs('/admin/teachers');
            });
        });
    }

    /** @test */
    public function adminCanCreateTeacher()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser)
             {
                $user = new User([
                    'username' => 'Admin',
                    'password' => 'carl',
                    'role' => 'admin'
                ]);

                $browser->loginAs($user)
                        ->visit('/admin/teachers/create')
                        ->type('first_name', 'Carl')
                        ->type('last_name', 'Carlson')
                        ->press('Opslaan')
                        ->assertSee('Docent opgeslagen!');
            });
        });
    }
}
