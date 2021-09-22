<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegisterProfilePageStatus200()
    {
        $this->get('/registerprofile')
            ->assertStatus(200)
            ->assertSeeText("E-MAIL");
    }

    public function testRegisterProfileEmailValidation()
    {
        $this->post("/registerprofile", [
            "email" => "w@w"
        ])
            ->assertSessionHasErrors(
                [
                    "email" => "Email skal mindst have 5 bogstaver."
                ]
            );

        // arrange (email already exists)
        User::factory()->create([
            "email" => "john@john.dk"
        ]);

        // act
        $this->post("/registerprofile", [
            "email" => "john@john.dk"
        ])
            //assert
            ->assertSessionHasErrors(
                [
                    "email" => "Der er allerede registreret en bruger med denne email."
                ]
            );
    }

    public function testRegisterFormValidation()
    {
        $response = $this->post("/register", [
            "firstname" => "w",
            "surname" => "ww",
            "email" => "www@www",
            "telephone" => "1234",
            "cvr" => 1234,
            "password" => 1234,
            "birthdate" => now()
        ]);

        $response->assertSessionHasErrors([
            "firstname" => "Dit fornavn skal har mindst 2 tegn",
            "telephone" => "Telefon nummer skal mindst være 8 tal",
            "birthdate" => "Du kan ikke sætte en dato der ligger i fremtiden",
            "password" => "Dit kodeord skal have minimum 8 tegn"
        ]);
    }
}
