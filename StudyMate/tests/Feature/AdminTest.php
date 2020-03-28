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
    public function admin_can_see_teachers_list()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $response = $this->actingAs($user)->get('/admin/teachers')->assertOk();
    }

    /** @test **/
    public function only_admins_can_see_the_teachers_list() {
        $response = $this->get('/admin/teachers')->assertRedirect('/');
    }

    /** @test **/
    public function admin_can_see_the_tests_list()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $response = $this->actingAs($user)->get('/admin/tests')->assertOk();
    }

    /** @test **/
    public function admin_can_see_the_modules_list()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $response = $this->actingAs($user)->get('/admin/modules')->assertOk();
    }
}
