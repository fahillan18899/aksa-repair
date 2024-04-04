<?php

namespace Tests\Feature\Admin;

use App\Models\Registrasi;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Tests\MustAuthTestCase;

class RegistrasiAlatTest extends MustAuthTestCase
{
    protected function tearDown(): void
    {
        $this->post('/logout');
    }

    /**
     * @test
     */
    public function alat_without_picture_success()
    {
        $this->post('/dashboard/ppm/registrasi', [
            'id_aset' => 'RS000024022704001',
            'qr_code' => 'q10-dkfjd',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertStatus(302)->assertSessionHas('success');

        $id_aset = Registrasi::where('id_aset', '=', 'RS000024022704001')->firstOrFail();

        $this->put('/dashboard/ppm/registrasi/' . $id_aset->id_aset, [
            'id_aset' => 'RS000024022704001',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Lamborgini',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('/dashboard/ppm/registrasi/' . $id_aset->id_aset)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function alat_without_picture_fail()
    {
        $this->post('/dashboard/ppm/registrasi', [
            // 'id_aset' => 'RS000024022704001',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertSessionMissing('success');

        $this->put('/dashboard/ppm/registrasi/RS000024022705001', [
            'id_aset' => 'RS000024022704001',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Lamborgini',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertSessionMissing('success');

        $this->delete('/dashboard/ppm/registrasi/RS000024025001')->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function alat_with_picture_success()
    {
        Storage::fake('gambar');
        $file = UploadedFile::fake()->image('ventilator12.jpg');

        $this->post('/dashboard/ppm/registrasi', [
            'id_aset' => 'RS000024022704001',
            'qr_code' => 'q10-dkfjd',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'gambar' => $file,
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertStatus(302)->assertSessionHas('success');

        $id_aset = Registrasi::where('id_aset', '=', 'RS000024022704001')->firstOrFail();

        $this->put('/dashboard/ppm/registrasi/' . $id_aset->id_aset, [
            'id_aset' => 'RS000024022704001',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Lamborgini',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'gambar' => $file,
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('/dashboard/ppm/registrasi/' . $id_aset->id_aset)->assertSessionHas('success');

        Storage::disk('gambar');
    }

    /**
     * @test
     */
    public function alat_with_picture_fail()
    {
        Storage::fake('gambar');
        $file = UploadedFile::fake()->image('ventilator.jpg');

        $this->post('/dashboard/ppm/registrasi', [
            // 'id_aset' => 'RS000024022704001',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Polytron',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'gambar' => $file,
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertSessionMissing('success');

        $this->put('/dashboard/ppm/registrasi/RS000024022705001', [
            'id_aset' => 'RS000024022704001',
            'jenis_alat' => 'Milik KSO',
            'nama_alat' => 'Ventilator',
            'merek' => 'Lamborgini',
            'type' => 'Electric Scooter',
            'serial_number' => 'K10-2301',
            'gambar' => $file,
            'lokasi_alat' => 'Ruangan Riset,Gedung A',
            'tanggal_kalibrasi' => null,
            'kode_rs' => Auth::user()->kode_rs,
            'teknisi_ppm' => 'Teknisi 11',
            'tahun_perolehan' => 2022,
        ])->assertSessionMissing('success');

        $this->delete('/dashboard/ppm/registrasi/RS000024022705001')->assertSessionMissing('success');
    }
}
