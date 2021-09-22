<?php

namespace Tests\Feature;

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
    public function testOpretProfilePageStatus200()
    {
        $this->get('/opretprofile')
            ->assertStatus(200)
            ->assertSeeText("E-MAIL");
    }

    public function testRegisterFormValidation()
    {
        $response = $this->post("/rprofile", [
            "firstname" => "w",
            "surname" => "ww",
            "email" => "www@www",
            "telephone" => "1234",
            "cvr" => 1234,
            "password" => 1234,
            "birthdate" => date("22/22/2022")
        ]);

        $response->assertSessionHasErrors([
            "firstname" => "Dit fornavn skal har mindst 2 tegn",
            "telephone" => "Telefon nummer skal mindst være 8 tal",
        ]);
    }
}
