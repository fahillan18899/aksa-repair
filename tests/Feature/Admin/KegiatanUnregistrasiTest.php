<?php

namespace Tests\Feature\Admin;

use App\Models\PerbaikanUnregistrasi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\MustAuthTestCase;

class KegiatanUnregistrasiTest extends MustAuthTestCase
{
    protected function tearDown(): void
    {
        PerbaikanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->delete();
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
            'pelapor_un' => 'Maulana',
            'keterangan_un' => 'Alat Dalam Perbaikan',
            'ka_instalasi_un' => 'Pandu',
            'teknisi_1_un' => 'Teknisi',
        ])->assertStatus(302)->assertSessionHas('success');
        
        $id_perbaikan = PerbaikanUnregistrasi::where('id_perbaikan_un', '=', 'RS0000B2403200002')->firstOrFail();

        $this->put('/dashboard/ppm/aset_unregistrasi/edit_perbaikan/'.$id_perbaikan->id_perbaikan_un, [
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
        ])->assertStatus(302)->assertSessionHas('success');

        $this->assertNotNull($id_perbaikan);
    }
}
