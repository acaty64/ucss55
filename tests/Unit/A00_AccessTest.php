<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class A00_AccessTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAccess()
    {
        $this->get('/')
        	->assertStatus(200);
    }
}
