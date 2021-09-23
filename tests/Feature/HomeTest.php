<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{

    public function testHomePageHeader()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSeeText("Login")
            ->assertSeeText("Register");
    }
}
