<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
        
    //     // $response = $this->call('GET', '/admin/teachers');

    //     // $this->partialMock(Teacher::class, function ($mock) {
    //     //     $mock->shouldReceive('all')->once();
    //     // });

    //     // $this->assertEquals(200, $response->status());
    // }

    /** @test **/
    public function only_admins_can_see_the_teachers_list() {
        $response = $this->get('/admins/teachers')->assertRedirect('/');
    }
}
