<?php

namespace Tests\Feature\Auth;

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
    function tearDown(): void
    {
        User::query()->where('username', '=', 'test1')->delete();
    }

    public function test_register_success()
    {
        $response = $this->post('/register', [
            'username' => 'test1',
            'password' => 'test1',
            'kode_rs' => 'RS0000',
            'user_role' => 'user'
        ]);

        $response->assertSessionHas('success', 'Registrasi berhasil');
    }

    public function test_register_duplicate()
    {
        $response = $this->post('/register', [
            'username' => 'maulana',
            'password' => 'maulana',
            'kode_rs' => 'RS0000',
            'user_role' => 'user'
        ]);

        $response->assertStatus(302);
    }

}
