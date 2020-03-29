<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Teacher;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test **/
    public function onlyAdminsCanSeeTheTeachersList() {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'deadline',
        ]);
        $this->get('/admin/teachers')->assertRedirect('/');
        $this->actingAs($user)->get('/admin/teachers')->assertRedirect('/');
    }

    /** @test **/
    public function onlyAdminsCanSeeTheModulesList() {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'deadline',
        ]);
        $this->get('/admin/modules')->assertRedirect('/');
        $this->actingAs($user)->get('/admin/modules')->assertRedirect('/');
    }

    /** @test **/
    public function onlyAdminsCanSeeTheTestsList() {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'deadline',
        ]);
        $this->get('/admin/tests')->assertRedirect('/');
        $this->actingAs($user)->get('/admin/tests')->assertRedirect('/');
    }

    /** @test **/
    public function adminCanSeeTeachersList()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $this->actingAs($user)->get('/admin/teachers')->assertOk();
    }

    /** @test **/
    public function adminCanSeeTheTestsList()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $this->actingAs($user)->get('/admin/tests')->assertOk();
    }

    /** @test **/
    public function adminCanSeeTheModulesList()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $this->actingAs($user)->get('/admin/modules')->assertOk();
    }

    /** @test **/
    public function onlyDeadlinesCanSeeTheDeadlineManager() {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'admin',
        ]);
        $this->get('/deadline/index')->assertRedirect('/');
        $this->actingAs($user)->get('/deadline/index')->assertRedirect('/');
    }

    /** @test **/
    public function deadlineCanSeeTheDeadlineManager()
    {
        $user = new User([
            'username' => 'test',
            'password' => 'carl',
            'role' => 'deadline',
        ]);
        $this->actingAs($user)->get('/deadline/index')->assertOk();
    }
}
