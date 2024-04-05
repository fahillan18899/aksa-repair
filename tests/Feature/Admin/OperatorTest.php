<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Tests\MustAuthTestCase;

class OperatorTest extends MustAuthTestCase
{
    protected function tearDown(): void
    {
        $this->post('/logout');
    }

    /**
     * @test
     */
    public function add_operator_success(): void
    {
        $this->post('/dashboard/ppm/operator', [
            'username' => 'user5',
            'password' => 'user5',
            'user_role' => 'user',
        ])->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function add_operator_fail(): void
    {
        $this->post('/dashboard/ppm/operator', [
            // 'username' => 'user',
            'password' => 'user5',
            'user_role' => 'user',
        ])->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function edit_operator_success(): void
    {
        $id = User::where('username', '=', 'user5')->firstOrFail();

        $this->put('/dashboard/ppm/operator/' . $id->user_id, [
            'username' => 'user_dua',
            'user_role' => 'user',
        ])->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function edit_operator_already_exists(): void
    {
        $id = User::where('username', '=', 'user_dua')->firstOrFail();

        $this->put('/dashboard/ppm/operator/' . $id->user_id, [
            'username' => 'teknisi5',
            'user_role' => 'user',
        ])->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function delete_operator_success(): void
    {
        $id = User::where('username', '=', 'user_dua')->firstOrFail();

        $this->delete('/dashboard/ppm/operator/' . $id->user_id)->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function delete_operator_not_found(): void
    {
        $this->delete('/dashboard/ppm/operator/100')->assertSessionMissing('success');
    }
}
