<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function testUnautherizedUserIsRedirected()
    {
        $response = $this->get('/dashboard');
        $this->assertGuest();
        $response->assertRedirect('login');
    }

    // Test incomplete?
    public function testLoggedInUserHasAccess()
    {
        // arrange 
        $user = User::factory()->create();

        // act (ignore the error)
        $response = $this->actingAs($user)->get("/dashboard");

        //assert
        $this->assertAuthenticatedAs($user);
        $response->assertSuccessful();
    }
    public function testShowsLoggedInUsersName()
    {
        // arrange
        $user = User::factory()->create();

        // act
        $response = $this->actingAs($user)
        ->get('/dashboard');

        // assert
        $this->assertAuthenticatedAs($user);
        $response->assertViewIs('dashboard.index');
        $response->assertSeeText($user->firstname);
    }
}
