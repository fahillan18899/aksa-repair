<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_success()
    {
        $response = $this->post('/', [
            'username' => 'teknisi5',
            'password' => 'teknisi5',
            'kode_rs' => 'RS0000',
            'user_role' => 'teknisi'
        ]);

        $response->assertSessionHas('success', 'Signed in');
    }

    public function test_login_fail()
    {
        $response = $this->post('/', [
            'username' => 'teknisi5',
            'password' => 'asdsdf',
            'kode_rs' => 'RS0000',
            'user_role' => 'user'
        ]);

        $response->assertSessionHas('error', 'Login details are not valid');
    }
}
