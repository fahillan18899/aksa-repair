<?php

namespace Tests\Feature\Admin;

use App\Models\StockOpname;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class StockOpnameTest extends TestCase
{
    protected function tearDown(): void
    {
        StockOpname::query()->where('nama', '=', 'Sparepart 1')->orWhere('nama', '=', 'Sparepart 2')->delete();
    }

    public function test_add_sparepart_success(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/stock_opname', [
            'nama' => 'Sparepart 1',
            'type' => 'Type Sparepart 1',
            'lokasi_pemakaian' => 'Salatiga',
            'jumlah_masuk' => 10,
            'jumlah_keluar' => 5,
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
            'stock' => 100,
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertStatus(302)->assertSessionHas('success', 'Data Berhasil Di Tambahkan.');
    }

    public function test_add_sparepart_fail(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/stock_opname', [
            // 'nama' => 'Sparepart 1',
            'type' => 'Type Sparepart 1',
            'lokasi_pemakaian' => 'Salatiga',
            'jumlah_masuk' => 10,
            'jumlah_keluar' => 5,
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
            'stock' => 100,
            // 'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertSessionMissing('success');
    }

    public function test_update_sparepart_success(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $user_id = User::where('nama', '=', 'Sparepart 1')->first('id');

        $response = $this->post('/dashboard/ppm/stock_opname/'. $user_id . '/edit', [
            'nama' => 'Sparepart 2',
            'type' => 'Type Sparepart 2',
            'lokasi_pemakaian' => 'Salatiga',
            'jumlah_masuk' => 10,
            'jumlah_keluar' => 5,
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
            'stock' => 100,
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertStatus(302)->assertSessionHas('success', 'Data Berhasil Di Ubah');
    }

    public function test_update_sparepart_fail(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/stock_opname/10/edit', [
            'nama' => 'Sparepart 1',
            'type' => 'Type Sparepart 2',
            'lokasi_pemakaian' => 'Salatiga',
            'jumlah_masuk' => 10,
            'jumlah_keluar' => 5,
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
            'stock' => 100,
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertStatus(405)->assertSessionMissing('success');
    }

    public function test_delete_sparepart_success(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);
        $user_id = User::where('nama', '=', 'Sparepart 1')->first('id');


        $response = $this->post('/dashboard/ppm/stock_opname/'. $user_id);

        $response->assertStatus(302);
    }

    public function test_delete_sparepart_fail(): void
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/stock_opname/20');

        $response->assertStatus(405);
    }
}
