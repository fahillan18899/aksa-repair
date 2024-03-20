<?php

namespace Tests\Feature\Admin;

use App\Models\PengirimanRegistrasi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\MustAuthTestCase;

class KegiatanTerRegistrasiTest extends MustAuthTestCase
{
    protected function tearDown(): void
    {
        $this->post('/logout');
    }
    
    public function test_perbaikan_alat_success()
    {
        $this->post('/dashboard/ppm/aset_teregistrasi', [
            'id_perbaikan_reg' => 'RS0000B2403200002',
            'id_aset_reg' => 'RS000024022705728',
            'tanggal_perbaikan_reg' => '2024-03-20 03:39:45',
            'nama_alat_reg' => 'Ventilator',
            'merek_alat_reg' => 'Polytron',
            'type_alat_reg' => 'Electric Scooter',
            'serial_number_reg' => 'K10-2301',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'pelapor_reg' => 'Maulana',
            'keterangan_kondisi_alat_reg' => 'Alat Dalam Perbaikan',
            'ka_instalasi_reg' => 'Pandu',
            'teknisi_1_reg' => 'Teknisi',
            'kode_rs' => Auth::user()->kode_rs
        ])->assertStatus(302)->assertSessionHas('success');

        $this->put('/dashboard/ppm/aset_teregistrasi/RS0000B2403200002', [
            'id_aset_reg' => 'RS000024022705728',
            'tanggal_perbaikan_reg' => '2024-03-20 03:39:45',
            'nama_alat_reg' => 'Ventilator',
            'merek_alat_reg' => 'Polytron',
            'type_alat_reg' => 'Electric Scooter',
            'serial_number_reg' => 'K10-2301',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'pelapor_reg' => 'Ilzam',
            'keterangan_kondisi_alat_reg' => 'Alat Dalam Perbaikan',
            'ka_instalasi_reg' => 'Pandu',
            'teknisi_1_reg' => 'Teknisi',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('dashboard/ppm/perbaikan_teregistrasi/RS0000B2403200002')->assertStatus(302)->assertSessionHas('success');
    }

    public function test_pengiriman_alat_success()
    {
        $this->post('/dashboard/ppm/tambah_pengiriman', [
            'id_perbaikan_reg' => 'RS0000B2403200002',
            'tanggal_perbaikan_reg' => '2024-03-20',
            'tanggal_pengiriman_reg' => '2024-03-20',
            'id_aset_reg' => 'RS000024022705728',
            'nama_alat_reg' => 'Ventilator',
            'merek_alat_reg' => 'Polytron',
            'type_alat_reg' => 'Electric Scooter',
            'seri_number_reg' => 'K10-2301',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'teknisi_1_reg' => 'Teknisi',
            'pelapor_reg' => 'Ilzam',
            'keterangan_kondisi_alat_reg' => 'Alat Dalam Perbaikan',
            'ka_instalasi_reg' => 'Pandu',
            'kode_rs' => Auth::user()->kode_rs
        ])->assertStatus(302)->assertSessionHas('success');

        $this->put('/dashboard/ppm/update_pengiriman/RS0000B2403200002', [
            'id_perbaikan_reg' => 'RS0000B2403200002',
            'tanggal_perbaikan_reg' => '2024-03-20',
            'tanggal_pengiriman_reg' => '2024-03-20',
            'id_aset_reg' => 'RS000024022705728',
            'nama_alat_reg' => 'Ventilator',
            'merek_alat_reg' => 'Polytron',
            'type_alat_reg' => 'Electric Scooter',
            'seri_number_reg' => 'K10-2301',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'teknisi_1_reg' => 'Teknisi',
            'pelapor_reg' => 'Prakas',
            'keterangan_kondisi_alat_reg' => 'Alat Dalam Perbaikan',
            'ka_instalasi_reg' => 'Pandu',
        ])->assertStatus(302)->assertSessionHas('success');

        $id_pengiriman_reg = PengirimanRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->first();

        $this->delete('dashboard/ppm/pengiriman_teregistrasi/pengiriman_teregistrasi/'.$id_pengiriman_reg->id_perbaikan_reg)->assertStatus(302)->assertSessionHas('success');
    }
}
