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

        // act (ignore the error)
        $response = $this->actingAs($user)->get("/login");
        $response->assertRedirect("/home");

        //assert
        $this->assertAuthenticatedAs($user);
    }

    // will be updated, when more validation is added.
    public function testCantLoginWithInvalidCredentials()
    {
        // arrange 
        $user = User::factory()->create();

        // act
        $response = $this->post("/login", [
            "email" => $user->email,
            "password" => "invalidpassword"
        ]);

        // assert
        $response->assertStatus(302);
        $response->assertSessionHas("errors");

        $messages = session("errors")->getMessages();
        $this->assertEquals($messages["email"][0], "These credentials do not match our records.");
        // dd($messages);
    }
}
