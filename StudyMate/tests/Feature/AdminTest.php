<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Teacher;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test **/
    public function adminCanSeeTeachersList()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $response = $this->actingAs($user)->get('/admin/teachers')->assertOk();
    }

    /** @test **/
    public function onlyAdminsCanSeeTheTeachersList() {
        $response = $this->get('/admin/teachers')->assertRedirect('/');
    }

    /** @test **/
    public function adminCanSeeTheTestsList()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $response = $this->actingAs($user)->get('/admin/tests')->assertOk();
    }

    /** @test **/
    public function adminCanSeeTheModulesList()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $response = $this->actingAs($user)->get('/admin/modules')->assertOk();
    }
}
