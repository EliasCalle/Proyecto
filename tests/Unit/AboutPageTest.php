<?php

namespace Tests\Unit;

use Tests\TestCase;



class AboutPageTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_the_user_can_see_the_about_page()
    {
        $response = $this->get('/login');

        $response ->assertSee('Contraseña');

        $response -> assertStatus(200);
    }
}
