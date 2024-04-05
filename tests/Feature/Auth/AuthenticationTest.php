<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * @test
     */
    public function login_success()
    {
        $this->post('/', [
            'username' => 'teknisi5',
            'password' => 'teknisi5',
            'kode_rs' => 'RS0000',
            'user_role' => 'teknisi',
        ])->assertStatus(302)->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function login_fail()
    {
        $this->post('/', [
            'username' => 'teknisi5',
            'password' => 'asdsdf',
            'kode_rs' => 'RS0000',
            'user_role' => 'user',
        ])->assertSessionHas('success');
    }
}
