<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{

    public function testHomePageHeader()
    {
        $response = $this->get('/');

        $response->assertSeeText("Login");
        $response->assertSeeText("Register");
    }
}
