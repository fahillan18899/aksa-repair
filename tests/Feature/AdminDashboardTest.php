<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    public function test_gedung_success()
    {
        $kodeRs_ = "RS0000";
         $dataGedung = DB::table('gedungs')
            ->select(DB::raw('max(id_gedung) as maxIDGEDUNG'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeGedung = $dataGedung->maxIDGEDUNG;

        $urutanGedung = (int)substr($kodeGedung, 6, 7);
        $urutanGedung++;

        $kodeGedung = $kodeRs_ . sprintf("%03s", $urutanGedung);

        $response = $this->post('/dashboard/ppm/gedung', [
            'id_gedung' => $kodeGedung,
            'nama_gedung' => 'Gedung C',
            'kode_rs'  => $kodeRs_,
        ]);

        $response->assertSessionHas('message', 'Data Gedung Berhasil di Tambahkan.');
    }

    public function test_gedung_fail()
    {
        $kodeRs_ =  "RS0000";
         $dataGedung = DB::table('gedungs')
            ->select(DB::raw('max(id_gedung) as maxIDGEDUNG'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeGedung = $dataGedung->maxIDGEDUNG;

        $urutanGedung = (int)substr($kodeGedung, 6, 7);
        $urutanGedung++;

        $kodeGedung = $kodeRs_ . sprintf("%03s", $urutanGedung);

        $response = $this->post('/dashboard/ppm/gedung', [
            // 'id_gedung' => $kodeGedung,
            'nama_gedung' => 'Gedung C',
            'kode_rs'  =>  "RS0000",
        ]);

        $response->assertSessionMissing("message");
    }

    public function test_alat_success()
    {
        $kodeRs_ = "RS0000";
        $dataAlat = DB::table('alats')
            ->select(DB::raw('max(id_alat) as maxIDALAT'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAlat = $dataAlat->maxIDALAT;

        $urutanAlat = (int)substr($kodeAlat, 6, 7);
        $urutanAlat++;

        $kodeAlat = $kodeRs_ . sprintf("%03s", $urutanAlat);

        $response = $this->post("/dashboard/ppm/alat", [
            'id_alat' => $kodeAlat,
            'nama_alat' => 'Alat 1',
            'kode_rs' => $kodeRs_
        ]);

        $response->assertSessionHas('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function test_alat_fail()
    {
        $kodeRs_ = "RS0000";
        $dataAlat = DB::table('alats')
            ->select(DB::raw('max(id_alat) as maxIDALAT'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAlat = $dataAlat->maxIDALAT;

        $urutanAlat = (int)substr($kodeAlat, 6, 7);
        $urutanAlat++;

        $kodeAlat = $kodeRs_ . sprintf("%03s", $urutanAlat);

        $response = $this->post("/dashboard/ppm/alat", [
            // 'id_alat' => $kodeAlat,
            'nama_alat' => 'Alat 1',
            'kode_rs' => $kodeRs_
        ]);

        $response->assertSessionMissing("success");
    }

    public function test_teknisi_success()
    {
        $kodeRs_ = "RS0000";
        $dataTeknisi = DB::table('teknisis')
            ->select(DB::raw('max(id_teknisi) as maxIDTEKNISI'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeTeknisi = $dataTeknisi->maxIDTEKNISI;

        $urutanTeknisi = (int)substr($kodeTeknisi, 6, 7);
        $urutanTeknisi++;

        $kodeTeknisi = $kodeRs_ . sprintf("%03s", $urutanTeknisi);

        $response = $this->post("/dashboard/ppm/teknisi", [
            'id_teknisi' => $kodeTeknisi,
            'nama_teknisi' => 'Teknisi 11',
            'kode_rs' => $kodeRs_
        ]);

        $response->assertSessionHas('message', 'Data Teknisi Berhasil di Tambahkan.');
    }

    public function test_teknisi_fail()
    {
        $kodeRs_ = "RS0000";
        $dataTeknisi = DB::table('teknisis')
        ->select(DB::raw('max(id_teknisi) as maxIDTEKNISI'))
         ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeTeknisi = $dataTeknisi->maxIDTEKNISI;

        $urutanTeknisi = (int)substr($kodeTeknisi, 6, 7);
        $urutanTeknisi++;

        $kodeTeknisi = $kodeRs_ . sprintf("%03s", $urutanTeknisi);

        $response = $this->post("/dashboard/ppm/teknisi", [
            // 'id_teknisi' => $kodeTeknisi,
            'nama_teknisi' => 'Teknisi 11',
            'kode_rs' => $kodeRs_
        ]);

        $response->assertSessionMissing("message");
    }

    public function test_ruangan_success()
    {
        $input_ruangan_alat = "Alat Ruangan 11";
        $input_ruangan = "Ruangan 11";

        $kodeRs_ = "RS0000";
        $dataLokasi = DB::table('ruangans')
        ->select(DB::raw('max(id_ruangan) as maxIDLOKASI'))
         ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeLokasi = $dataLokasi->maxIDLOKASI;

        $urutanLokasi = (int)substr($kodeLokasi, 6, 7);
        $urutanLokasi++;

        $kodeLokasi = $kodeRs_ . sprintf("%03s", $urutanLokasi);

        $lokasi_alat = $input_ruangan_alat . ',' . $input_ruangan;
        $response = $this->post("/dashboard/ppm/ruangan", [
            'id_ruangan' => $kodeLokasi,
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => "Teknisi",
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => $kodeRs_
        ]);

        $response->assertSessionHas('success', 'Data Ruangan Berhasil di Tambahkan.');
    }

    public function test_ruangan_fail()
    {
        $input_ruangan_alat = "Alat Ruangan 11";
        $input_ruangan = "Ruangan 11";

        $kodeRs_ = "RS0000";
        $dataLokasi = DB::table('ruangans')
        ->select(DB::raw('max(id_ruangan) as maxIDLOKASI'))
         ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeLokasi = $dataLokasi->maxIDLOKASI;

        $urutanLokasi = (int)substr($kodeLokasi, 6, 7);
        $urutanLokasi++;

        $kodeLokasi = $kodeRs_ . sprintf("%03s", $urutanLokasi);

        $lokasi_alat = $input_ruangan_alat . ',' . $input_ruangan;
        $response = $this->post("/dashboard/ppm/ruangan", [
            // 'id_ruangan' => $kodeLokasi,
            'ruangan_alat' => $input_ruangan_alat,
            'ruangan' => $input_ruangan,
            'kepala_ruangan' => "Teknisi",
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => $kodeRs_
        ]);

        $response->assertSessionMissing('success');
    }
}
