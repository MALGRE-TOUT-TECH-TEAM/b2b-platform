<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    public function testUserCanViewLoginPage()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs("auth.login");
    }

    public function testLoginFunctionality()
    {
        // arrange 
        $user = User::factory()->create();

        // act
        $response = $this->post("/login", [
            "email" => $user->email,
            "password" => $user->password
        ]);

        // assert
        $response->assertRedirect("/");
        $response->assertDontSeeText("Login");
    }

    public function testLoggedInUserIsRedirectedFromLoginPage()
    {
        // arrange 
        $user = User::factory()->create();

        // act
        $response = $this->actingAs($user)->get("/login");
        $response->assertRedirect("/home");

        //assert
        $this->assertAuthenticatedAs($user);
    }
}
