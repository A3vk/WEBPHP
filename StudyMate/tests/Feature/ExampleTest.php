<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test **/
    public function only_admins_can_see_the_teachers_list() {
        $response = $this->get('/admins/teachers')->assertRedirect('/');
    }
}
