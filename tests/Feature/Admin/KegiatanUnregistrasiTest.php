<?php

namespace Tests\Feature\Admin;

use App\Models\PengembalianUnregistrasi;
use App\Models\PenghapusanUnregistrasi;
use App\Models\PengirimanUnregistrasi;
use App\Models\PerbaikanUnregistrasi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\MustAuthTestCase;

class KegiatanUnregistrasiTest extends MustAuthTestCase
{
    protected function tearDown(): void
    {
        PerbaikanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->delete();
        PengirimanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->delete();
        PengembalianUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->delete();
        PenghapusanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->delete();
        $this->post('/logout');
    }
    
    public function test_perbaikan_alat_success()
    {
        $this->post('/dashboard/ppm/tambah_unregistrasi', [
            'id_perbaikan_un' => 'RS0000B2403200002',
            'tanggal_perbaikan_un' => date('Y-m-d'),
            'nama_alat_un' => 'Ventilator',
            'merek_alat_un' => 'Polytron',
            'type_alat_un' => 'Electric Scooter',
            'serial_number_un' => 'K10-2301',
            'lokasi_alat_un' => 'Ruangan Riset,Gedung A',
            'pelapor_un' => 'Ilzam',
            'keterangan_un' => 'Alat Dalam Perbaikan',
            'ka_instalasi_un' => 'Pandu',
            'teknisi_1_un' => 'Teknisi',
            'keluhan_dari_alat_un' => 'Tidak berfungsi semestinya'
        ])->assertStatus(302)->assertSessionHas('success');
        
        $id_perbaikan = PerbaikanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/aset_unregistrasi/edit_perbaikan/'.$id_perbaikan->id_perbaikan_un, [
            'tanggal_perbaikan_un' => date('Y-m-d'),
            'nama_alat_un' => 'Ventilator',
            'merek_alat_un' => 'Polytron',
            'type_alat_un' => 'Electric Scooter',
            'serial_number_un' => 'K10-2301',
            'lokasi_alat_un' => 'Ruangan Riset,Gedung A',
            'pelapor_un' => 'Ilzam',
            'keterangan_un' => 'Alat Dalam Perbaikan',
            'ka_instalasi_un' => 'Pandu',
            'teknisi_1_un' => 'Teknisi',
            'keluhan_dari_alat_un' => 'Tidak berfungsi semestinya'
        ])->assertStatus(302)->assertSessionHas('success');

        $this->assertNotNull($id_perbaikan);
    }

    public function test_pengiriman_alat_success()
    {
        $this->post('/dashboard/ppm/tambah_pengiriman_un', [
            'id_perbaikan_un' => 'RS0000B2403200002',
            'tanggal_perbaikan_un' => '2024-03-21',
            'tanggal_pengiriman_un' => '2024-03-21',
            'nama_alat_un' => 'Ventilator',
            'merek_alat_un' => 'Polytron',
            'type_alat_un' => 'Electric Scooter',
            'serial_number_un' => 'K10-2301',
            'lokasi_alat_un' => 'Ruangan Riset,Gedung A',
            'pelapor_un' => 'Ilzam',
            'keterangan_un' => 'Alat Dalam Perbaikan',
            'teknisi_1_un' => 'Teknisi',
            'nama_rekanan_un' => 'Maulana',
            'alamat_rekanan_un' => 'Mojosongo',
            'teknisi_rekanan_un' => 'Teknisi',
            'telphone_teknisi_rek_un' => '1902883',
            'ka_instalasi_un' => 'Pandu',
        ])->assertStatus(302)->assertSessionHas('success');

        $id_pengiriman = PengirimanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/aset_unregistrasi/edit_pengiriman/'.$id_pengiriman->id_perbaikan_un, [
            'tanggal_perbaikan_un' => '2024-03-21',
            'tanggal_pengiriman_un' => '2024-03-21',
            'nama_alat_un' => 'Ventilator',
            'merek_alat_un' => 'Polytron',
            'type_alat_un' => 'Electric Scooter',
            'serial_number_un' => 'K10-2301',
            'lokasi_alat_un' => 'Ruangan Riset,Gedung A',
            'pelapor_un' => 'Ilzam',
            'keterangan_un' => 'Alat Dalam Perbaikan',
            'teknisi_1_un' => 'Teknisi',
            'nama_rekanan_un' => 'Maulana',
            'alamat_rekanan_un' => 'Mojosongo',
            'teknisi_rekanan_un' => 'Teknisi',
            'telphone_teknisi_rek_un' => '1902883',
            'ka_instalasi_un' => 'Pandu',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->assertNotNull($id_pengiriman);
    }

    public function test_pengembalian_alat_success()
    {
        $this->post('/dashboard/ppm/tambah_pengembalian_un', [
            'id_perbaikan_un' => 'RS0000B2403200002',
            'tanggal_perbaikan_un' => '2024-03-21',
            'tanggal_pengembalian_un' => '2024-03-21',
            'nama_alat_un' => 'Ventilator',
            'peneriama_alat_un' => 'Penerima 1',
            'merek_alat_un' => 'Polytron',
            'ka_instalasi_un' => 'Pandu',
            'type_alat_un' => 'Electric Scooter',
            'teknisi_1_un' => 'Teknisi',
            'serial_number_un' => 'K10-2301',
            'lokasi_alat_un' => 'Ruangan Riset,Gedung A',
            'keterangan_un' => 'Alat Dalam Perbaikan',
            'pelapor_un' => 'Ilzam',
            'harga_perbaikan_un' => '10000000',
            'penyebab_kerusakan_un' => 'Ceroboh',
            'solusi_perbaikan_un' => 'Dibongkar',
            'hasil_verifikasi_un' => 'sah',
        ])->assertStatus(302)->assertSessionHas('success');

        $id_pengiriman = PengembalianUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/aset_unregistrasi/edit_pengembalian/'.$id_pengiriman->id_perbaikan_un, [
            'tanggal_perbaikan_un' => '2024-03-21',
            'tanggal_pengembalian_un' => '2024-03-21',
            'nama_alat_un' => 'Ventilator',
            'peneriama_alat_un' => 'Penerima 1',
            'merek_alat_un' => 'Polytron',
            'ka_instalasi_un' => 'Pandu',
            'type_alat_un' => 'Electric Scooter',
            'teknisi_1_un' => 'Teknisi',
            'serial_number_un' => 'K10-2301',
            'lokasi_alat_un' => 'Ruangan Riset,Gedung A',
            'keterangan_un' => 'Alat Dalam Perbaikan',
            'pelapor_un' => 'Ilzam',
            'harga_perbaikan_un' => '10000000',
            'penyebab_kerusakan_un' => 'Ceroboh',
            'solusi_perbaikan_un' => 'Dibongkar',
            'hasil_verifikasi_un' => 'sah',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->assertNotNull($id_pengiriman);
    }

    public function test_penghapusan_alat_success()
    {
        /**
         * WARN: Should keep the consistention of 'required' rule, if database column is not null, the validation should be required 
         */
        $this->post('/dashboard/ppm/tambah_penghapusan', [
            'id_perbaikan_un' => 'RS0000B2403200002',
            'tanggal_perbaikan_un' => '2024-03-21',
            'nama_alat_un' => 'Ventilator',
            'merek_alat_un' => 'Polytron',
            'type_alat_un' => 'Electric Scooter',
            'serial_number_un' => 'K10-2301',
            'lokasi_alat_un' => 'Ruangan Riset,Gedung A',
            'pelapor_un' => 'Ilzam',
            'teknisi_1_un' => 'Teknisi',
            'tanggal_penggudangan_un' => '2024-03-21',
            'ka_instalasi_un' => 'Pandu',
            'keterangan_penggudangan_un' => 'Alat Dalam Pengiriman',
            //FIXME: Cannot find 'success' value from session
        ])->assertStatus(302)->assertSessionHas('success');
        
        $id_laporan_penghapusan = PenghapusanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->first();

        $this->assertNotNull($id_laporan_penghapusan);
        $this->assertEquals('2024-03-21', $id_laporan_penghapusan->tanggal_penggudangan_un);
        $this->assertEquals('2024-03-21', $id_laporan_penghapusan->tanggal_perbaikan_un);
    }
}
