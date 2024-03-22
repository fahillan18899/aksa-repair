<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    public function test_login_success()
    {
        $this->post('/', [
            'username' => 'teknisi5',
            'password' => 'teknisi5',
            'kode_rs' => 'RS0000',
            'user_role' => 'teknisi'
        ])->assertStatus(302)->assertSessionMissing('success');
    }

    public function test_login_fail()
    {
        $this->post('/', [
            'username' => 'teknisi5',
            'password' => 'asdsdf',
            'kode_rs' => 'RS0000',
            'user_role' => 'user'
        ])->assertSessionHas('success');
    }
}
