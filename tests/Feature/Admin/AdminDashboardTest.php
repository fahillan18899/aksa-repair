<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    protected function tearDown(): void
    {
        $this->post('/logout');
    }

    public function test_gedung_success()
    {
         $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/gedung', [
            'id_gedung' => "RS0000005",
            'nama_gedung' => 'Gedung C',
            'kode_rs'  => Auth::user()->kode_rs,
        ]);

        $response->assertStatus(302)->assertSessionHas('message', 'Data Gedung Berhasil di Tambahkan.');
    }

    public function test_gedung_fail()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/gedung', [
            // 'id_gedung' => $kodeGedung,
            'nama_gedung' => 'Gedung C',
            'kode_rs'  => Auth::user()->kode_rs,
        ]);

        $response->assertSessionMissing("message");
    }

    public function test_alat_success()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post("/dashboard/ppm/alat", [
            'id_alat' => "RS0000005",
            'nama_alat' => 'Alat 1',
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertStatus(302)->assertSessionHas('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function test_alat_fail()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post("/dashboard/ppm/alat", [
            // 'id_alat' => $kodeAlat,
            'nama_alat' => 'Alat 1',
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertSessionMissing("success");
    }

    public function test_teknisi_success()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post("/dashboard/ppm/teknisi", [
            'id_teknisi' => "RS0000005",
            'nama_teknisi' => 'Teknisi 11',
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertStatus(302)->assertSessionHas('message', 'Data Teknisi Berhasil di Tambahkan.');
    }

    public function test_teknisi_fail()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post("/dashboard/ppm/teknisi", [
            // 'id_teknisi' => $kodeTeknisi,
            'nama_teknisi' => 'Teknisi 11',
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertSessionMissing("message");
    }

    public function test_ruangan_success()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $input_ruangan_alat = "Alat Ruangan 11";
        $input_ruangan = "Ruangan 11";
        $lokasi_alat = $input_ruangan_alat . ',' . $input_ruangan;

        $response = $this->post("/dashboard/ppm/ruangan", [
            'id_ruangan' => "RS0000005",
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => "Teknisi",
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertStatus(302)->assertSessionHas('success', 'Data Ruangan Berhasil di Tambahkan.');
    }

    public function test_ruangan_fail()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $input_ruangan_alat = "Alat Ruangan 11";
        $input_ruangan = "Ruangan 11";
        $lokasi_alat = $input_ruangan_alat . ',' . $input_ruangan;

        $response = $this->post("/dashboard/ppm/ruangan", [
            // 'id_ruangan' => $kodeLokasi,
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => "Teknisi",
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => Auth::user()->kode_rs
        ]);

        $response->assertSessionMissing('success');
    }
}
