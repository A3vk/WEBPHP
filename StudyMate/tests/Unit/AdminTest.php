<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Teacher;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $teacher = new Teacher([
            'first_name' => 'Carl',
            'last_name' => 'Carlsen',
        ]);
        
        // $this.assertEquals('Carl', $teacher->first_name);
    }
}
