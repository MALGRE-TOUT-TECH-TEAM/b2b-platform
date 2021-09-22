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
   
    public function testPageExistsAndIsAccessible()
    {
        $response = $this->get('/dashboard');
        $response->assertSuccessful();
    }
    public function testUnautherizedUserIsRedirected(){
        $response = $this->get('/dashboard');
        $this->assertGuest();
        $response->assertRedirect('login');
    }
    
    // Test incomplete.
    public function testAutherizedUserHasAccess(){
        $response = $this->get('/dashboard');
        $this->assertAuthenticated();
        $response->assertSuccessful();
    }
    // Test incomplete?
    public function testShowsLoggedInUsersName(){
        // arrange
        $user = User::factory().create();

        // act
        $response = $this->actingAs($user)->get('/dashboard');

        // assert
        $response->assertSee($user->firstName);
    }
}
