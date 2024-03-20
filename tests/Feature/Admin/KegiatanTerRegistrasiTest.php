<?php

namespace Tests\Feature\Admin;

use App\Models\PengembalianRegistrasi;
use App\Models\PenghapusanRegistrasi;
use App\Models\PengirimanRegistrasi;
use App\Models\PerbaikanRegistrasi;
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
            'tanggal_perbaikan_reg' => date('Y-m-d'),
            'nama_alat_reg' => 'Ventilator',
            'merek_alat_reg' => 'Polytron',
            'type_alat_reg' => 'Electric Scooter',
            'serial_number_reg' => 'K10-2301',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'pelapor_reg' => 'Maulana',
            'keterangan_kondisi_alat_reg' => 'Alat Dalam Perbaikan',
            'ka_instalasi_reg' => 'Pandu',
            'teknisi_1_reg' => 'Teknisi',
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertStatus(302)->assertSessionHas('success');
        
        $id_perbaikan = PerbaikanRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/aset_teregistrasi/'.$id_perbaikan->id_perbaikan_reg, [
            'id_aset_reg' => 'RS000024022705728',
            'tanggal_perbaikan_reg' => date('Y-m-d'),
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

        $this->delete('dashboard/ppm/perbaikan_teregistrasi/'.$id_perbaikan->id_perbaikan_reg)->assertStatus(302)->assertSessionHas('success');
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
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertStatus(302)->assertSessionHas('success');

        $id_pengiriman = PengirimanRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/update_pengiriman/'.$id_pengiriman->id_perbaikan_reg, [
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

        $this->delete('dashboard/ppm/pengiriman_teregistrasi/'.$id_pengiriman->id_perbaikan_reg)->assertStatus(302)->assertSessionHas('success');
    }

    public function test_pengembalian_alat_success()
    {
        $this->post('/dashboard/ppm/tambah_pengembalian', [
            'id_aset_reg' => 'RS000024022705728',
            'nama_alat_reg' => 'Ventilator',
            'tanggal_perbaikan_reg' => '2024-03-20',
            'merek_reg' => 'Polytron',
            'id_perbaikan_reg' => 'RS0000B2403200002',
            'tipe_reg' => 'Electric Scooter',
            'tanggal_pengembalian_reg' => '2024-03-20',
            'serial_number_reg' => 'K10-2301',
            'pelapor_reg' => 'Ilzam',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'keterangan_reg' => 'Alat Dalam Perbaikan',
            'penerima_reg' => 'Azam',
            'teknisi1_reg' => 'Teknisi',
            'ka_instalasi_reg' => 'Pandu',
        ])->assertStatus(302)->assertSessionHas('success');
        
        $id_pengembalian = PengembalianRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/update_pengembalian/'.$id_pengembalian->id_perbaikan_reg, [
            'id_aset_reg' => 'RS000024022705728',
            'nama_alat_reg' => 'Ventilator',
            'tanggal_perbaikan_reg' => '2024-03-20',
            'merek_reg' => 'Polytron',
            'id_perbaikan_reg' => 'RS0000B2403200002',
            'tipe_reg' => 'Electric Scooter',
            'tanggal_pengembalian_reg' => '2024-03-20',
            'serial_number_reg' => 'K10-2301',
            'pelapor_reg' => 'Maulana',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'keterangan_reg' => 'Alat Dalam Perbaikan',
            'penerima_reg' => 'Azam',
            'teknisi1_reg' => 'Teknisi',
            'ka_instalasi_reg' => 'Pandu',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('/dashboard/ppm/pengembalian_teregistrasi/'.$id_pengembalian->id_perbaikan_reg)->assertStatus(302)->assertSessionHas('success');
    }

    public function test_penghapusan_alat_success()
    {
         $this->post('/dashboard/ppm/tambah_penghapusan', [
            'nama_alat_reg' => 'Ventilator',
            'tanggal_perbaikan_reg' => '2024-03-20',
            'merek_alat_reg' => 'Polytron',
            'id_perbaikan_reg' => 'RS0000B2403200002',
            'type_alat_reg' => 'Electric Scooter',
            'tanggal_penggudangan_reg' => '2024-03-20',
            'serial_number_reg' => 'K10-2301',
            'pelapor_reg' => 'Ilzam',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'keterangan_pengguna_reg' => 'Alat Dalam Pembuangan',
            'ka_instalasi_reg' => 'Pandu',
        ])->assertStatus(302)->assertSessionHas('success');
        
        $id_pengembalian = PenghapusanRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/update_penghapusan/'.$id_pengembalian->id_perbaikan_reg, [
            'nama_alat_reg' => 'Ventilator',
            'tanggal_perbaikan_reg' => '2024-03-20',
            'merek_alat_reg' => 'Polytron',
            'id_perbaikan_reg' => 'RS0000B2403200002',
            'type_alat_reg' => 'Electric Scooter',
            'tanggal_penggudangan_reg' => '2024-03-20',
            'serial_number_reg' => 'K10-2301',
            'pelapor_reg' => 'Maulana',
            'lokasi_alat_reg' => 'Ruangan Riset,Gedung A',
            'keterangan_pengguna_reg' => 'Alat Dalam Pembuangan',
            'ka_instalasi_reg' => 'Pandu',
        ])->assertStatus(302)->assertSessionHas('success');

        $id_laporan_perbaikan = PerbaikanRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->first();
        $id_laporan_pengiriman = PengirimanRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->first();
        $id_laporan_pengembalian = PengembalianRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->first();
        $id_laporan_penghapusan = PenghapusanRegistrasi::where('id_perbaikan_reg', '=', 'RS0000B2403200002')->first();

        $this->assertEmpty($id_laporan_perbaikan);
        $this->assertEmpty($id_laporan_pengiriman);
        $this->assertEmpty($id_laporan_pengembalian);
        $this->assertNotEmpty($id_laporan_penghapusan);
    }
}
