<?php

namespace Tests\Feature\Admin;

use App\Models\Alat;
use App\Models\Gedung;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Auth;
use Tests\MustAuthTestCase;

class AdminDashboardTest extends MustAuthTestCase
{
    protected function tearDown(): void
    {
        $this->post('/logout');
    }

    /**
     * @test
     */
    public function gedung_success()
    {
        $this->post('/dashboard/ppm/gedung', [
            'id_gedung' => 'RS0000005',
            'nama_gedung' => 'Gedung C',
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertStatus(302)->assertSessionHas('message');

        $id_gedung = Gedung::where('id_gedung', '=', 'RS0000005')->firstOrFail();

        $this->put('/dashboard/ppm/gedung/' . $id_gedung->id_gedung, [
            'id_gedung' => 'RS0000005',
            'nama_gedung' => 'Gedung CB',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('/dashboard/ppm/gedung/' . $id_gedung->id_gedung)->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function gedung_fail()
    {
        $this->post('/dashboard/ppm/gedung', [
            // 'id_gedung' => $kodeGedung,
            'nama_gedung' => 'Gedung C',
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertSessionMissing('message');

        $this->put('/dashboard/ppm/gedung/100', [
            'id_gedung' => 'RS0000005',
            'nama_gedung' => 'Gedung CB',
        ])->assertSessionMissing('success');

        $this->delete('/dashboard/ppm/gedung/100')->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function alat_success()
    {
        $this->post('/dashboard/ppm/alat', [
            'id_alat' => 'RS0000005',
            'nama_alat' => 'Alat 5',
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertStatus(302)->assertSessionHas('success');

        $id_alat = Alat::where('id_alat', '=', 'RS0000005')->firstOrFail();

        $this->put('/dashboard/ppm/alat/' . $id_alat->id_alat, [
            'id_alat' => 'RS0000005',
            'nama_alat' => 'Alat CB',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('/dashboard/ppm/alat/' . $id_alat->id_alat)->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function alat_fail()
    {
        $this->post('/dashboard/ppm/alat', [
            // 'id_alat' => $kodeGedung,
            'nama_alat' => 'Alat 14',
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertSessionMissing('message');

        $this->put('/dashboard/ppm/alat/100', [
            'id_alat' => 'RS0000005',
            'nama_alat' => 'Alat CB',
        ])->assertSessionMissing('success');

        $this->delete('/dashboard/ppm/alat/100')->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function teknisi_success()
    {
        $this->post('/dashboard/ppm/teknisi', [
            'id_teknisi' => 'RS0000005',
            'nama_teknisi' => 'Teknisi 5',
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertStatus(302)->assertSessionHas('message');

        $id_teknisi = Teknisi::where('id_teknisi', '=', 'RS0000005')->firstOrFail();

        $this->put('/dashboard/ppm/teknisi/' . $id_teknisi->id_teknisi, [
            'id_teknisi' => 'RS0000005',
            'nama_teknisi' => 'Teknisi 10',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('/dashboard/ppm/teknisi/' . $id_teknisi->id_teknisi)->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function teknisi_fail()
    {
        $this->post('/dashboard/ppm/teknisi', [
            // 'id_teknisi' => $kodeGedung,
            'nama_teknisi' => 'Teknisi 14',
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertSessionMissing('message');

        $this->put('/dashboard/ppm/teknisi/100', [
            'id_alat' => 'RS0000005',
            'nama_alat' => 'Teknisi 15',
        ])->assertSessionMissing('success');

        $this->delete('/dashboard/ppm/teknisi/100')->assertSessionMissing('success');
    }

    /**
     * @test
     */
    public function ruangan_success()
    {
        $input_ruangan_alat = 'Gedung A';
        $input_ruangan = 'Ruangan 11';
        $lokasi_alat = $input_ruangan_alat . ',' . $input_ruangan;

        $this->post('/dashboard/ppm/ruangan', [
            'id_ruangan' => 'RS0000005',
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => 'Teknisi',
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertStatus(302)->assertSessionHas('success');

        $id_ruangan = Ruangan::where('id_ruangan', '=', 'RS0000005')->firstOrFail();

        $this->put('/dashboard/ppm/ruangan/' . $id_ruangan->id_ruangan, [
            'id_ruangan' => 'RS0000005',
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => 'Teknisi',
        ])->assertStatus(302)->assertSessionHas('success');

        $this->delete('/dashboard/ppm/ruangan/' . $id_ruangan->id_ruangan)->assertStatus(302)->assertSessionHas('success');
    }

    /**
     * @test
     */
    public function ruangan_fail()
    {
        $input_ruangan_alat = 'Alat Ruangan 11';
        $input_ruangan = 'Ruangan 11';
        $lokasi_alat = $input_ruangan_alat . ',' . $input_ruangan;

        $this->post('/dashboard/ppm/ruangan', [
            // 'id_ruangan' => $kodeLokasi,
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => 'Teknisi',
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => Auth::user()->kode_rs,
        ])->assertSessionMissing('success');

        $this->put('/dashboard/ppm/ruangan/100', [
            'id_ruangan' => 'RS0000005',
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => 'Teknisi',
        ])->assertSessionMissing('success');

        $this->delete('/dashboard/ppm/ruangan/100')->assertSessionMissing('success');
    }
}
