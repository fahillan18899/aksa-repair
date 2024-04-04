<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function tearDown(): void
    {
        User::query()->where('username', '=', 'test1')->delete();
    }

    /**
     * @test
     */
    public function register_success()
    {
        $this->post('/register', [
            'username' => 'test1',
            'password' => 'test1',
            'kode_rs' => 'RS0000',
            'user_role' => 'user',
        ])->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function register_duplicate()
    {
        $this->post('/register', [
            'username' => 'maulana',
            'password' => 'maulana',
            'kode_rs' => 'RS0000',
            'user_role' => 'user',
        ])->assertSessionMissing('success');
    }
}
