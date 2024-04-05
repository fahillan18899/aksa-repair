<?php

namespace Tests\Feature\Admin;

use App\Models\StockOpname;
use Illuminate\Support\Facades\Auth;
use Tests\MustAuthTestCase;

class StockOpnameTest extends MustAuthTestCase
{
    protected function tearDown(): void
    {
        $this->post('/logout');
    }

    /**
     * @test
     */
    public function add_sparepart_success(): void
    {
        $this->post('/dashboard/ppm/stock_opname', [
            'nama' => 'Sparepart 1',
            'type' => 'Type Sparepart 1',
            'lokasi_pemakaian' => 'Salatiga',
            'jumlah_masuk' => 10,
            'jumlah_sekarang' => 10,
            'jumlah_keluar' => 5,
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
            'stock' => 100,
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function add_sparepart_fail(): void
    {
        $this->post('/dashboard/ppm/stock_opname', [
            // 'nama' => 'Sparepart 1',
            'type' => 'Type Sparepart 1',
            'lokasi_pemakaian' => 'Salatiga',
            'jumlah_masuk' => 10,
            'jumlah_sekarang' => 10,
            'jumlah_keluar' => 5,
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
            'stock' => 100,
            // 'kode_rs' => Auth::user()->kode_rs
        ])->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function update_sparepart_success(): void
    {
        $id = StockOpname::where('nama', '=', 'Sparepart 1')->firstOrFail();

        $this->put('/dashboard/ppm/stock_opname/' . $id->id, [
            'nama' => 'Sparepart 2',
            'type' => 'Type Sparepart 2',
            'jumlah_masuk' => 10,
            'jumlah_sekarang' => 10,
            'jumlah_keluar' => 5,
            'lokasi_pemakaian' => 'Salatiga',
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
        ])->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function update_sparepart_fail(): void
    {
        $this->put('/dashboard/ppm/stock_opname/100', [
            'nama' => 'Sparepart 1',
            'type' => 'Type Sparepart 2',
            'lokasi_pemakaian' => 'Salatiga',
            'jumlah_masuk' => 10,
            'jumlah_sekarang' => 10,
            'jumlah_keluar' => 5,
            'tanggal_masuk' => date('Y-m-d'),
            'tanggal_keluar' => date('2025-02-12'),
            'stock' => 100,
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function delete_sparepart_success(): void
    {
        $id = StockOpname::where('nama', '=', 'Sparepart 2')->firstOrFail();

        $this->delete('/dashboard/ppm/stock_opname/' . $id->id)->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function delete_sparepart_fail(): void
    {
        $this->delete('/dashboard/ppm/stock_opname/2a0')->assertSessionMissing('success');
    }
}
