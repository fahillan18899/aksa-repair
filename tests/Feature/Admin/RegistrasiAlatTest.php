<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class RegistrasiAlatTest extends TestCase
{
    protected function tearDown(): void
    {
        $this->post('/logout');
    }

    public function test_add_alat_without_picture_success()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);
        $rand_number = fake()->numberBetween(5000, 7000);
        $response = $this->post('/dashboard/ppm/registrasi', [
            'id_aset' => 'RS00002402270' . $rand_number,
            'qr_code' => 'q10-dkfjd',
            'jenis_alat' => 'KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs'=> Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022
        ]);

        $response->assertStatus(302)->assertSessionHas('success', 'Data Registrasi Alat Berhasil Di Tambahkan');
    }

    public function test_add_alat_without_picture_fail()
    {
        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/registrasi', [
            // 'id_aset' => 'RS000024022700020',
            'qr_code' => 'q10-dkfjd',
            'jenis_alat' => 'KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs'=> Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022
        ]);

        $response->assertSessionMissing('success');
    }

    public function test_add_alat_with_picture_success()
    {
        Storage::fake('gambar');
        $file = UploadedFile::fake()->image('ventilator12.jpg');

        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $rand_number = fake()->numberBetween(5000, 7000);
        $response = $this->post('/dashboard/ppm/registrasi', [
            'id_aset' => 'RS00002402270' . $rand_number,
            'qr_code' => 'q10-dkfjd',
            'jenis_alat' => 'KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'gambar' => $file,
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs'=> Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022
        ]);

        Storage::disk('gambar');
        $response->assertStatus(302)->assertSessionHas('success', 'Data Registrasi Alat Berhasil Di Tambahkan');
    }

    public function test_add_alat_with_picture_fail()
    {
        Storage::fake('gambar');
        $file = UploadedFile::fake()->image('ventilator.jpg');

        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);

        $response = $this->post('/dashboard/ppm/registrasi', [
            // 'id_aset' => 'RS000024022700030',
            'qr_code' => 'q10-dkfjd',
            'jenis_alat' => 'KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'gambar' => $file,
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs'=> Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022
        ]);

        $response->assertSessionMissing('success');
    }
}
