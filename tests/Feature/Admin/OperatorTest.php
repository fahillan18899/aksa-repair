<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OperatorTest extends TestCase
{
    protected function tearDown(): void
    {
        User::query()->where('username', '=', 'user5')->orWhere('username', '=', 'user_dua')->delete();       
    }
    
    public function test_add_operator_success(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',  
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/operator', [
            'username' => 'user5',
            'password' => 'user5',
            'user_role' => 'user',
        ]);

        $response->assertStatus(302)->assertSessionHas('success', 'Data User Berhasil di Tambahkan.');
    }

    public function test_add_operator_fail(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/operator', [
            // 'username' => 'user',
            'password' => 'user',
            'user_role' => 'user',
        ]);

        $response->assertSessionMissing('success');
    }

    public function test_edit_operator_success(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/operator/13/edit', [
            'username' => 'user_dua',
            'user_role' => 'user',
        ]);

        $response->assertStatus(302)->assertSessionHas('success', 'Data User Berhasil di Ubah');
    }

    public function test_edit_operator_already_exists(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/operator/13/edit', [
            'username' => 'teknisi5',
            'user_role' => 'user',
        ]);

        $response->assertStatus(500)->assertSessionMissing('success');
    }

    // public function test_delete_operator(): void
    // {
    //     $this->post('/', [
    //         'username' => 'admin5',
    //         'password' => 'admin5',
    //         'kode_rs' => 'RS0000',
    //         'user_role' => 'admin'
    //     ]);

    //     $response = $this->delete('/dashboard/ppm/operator/13');

    //     $response->assertStatus(302);
    // }
}
