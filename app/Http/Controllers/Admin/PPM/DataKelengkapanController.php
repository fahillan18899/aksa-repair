<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Gedung;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataKelengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedung  = Gedung::where('kode_rs',Auth::user()->kode_rs)->get();
        $alat    = Alat::where('kode_rs',Auth::user()->kode_rs)->get();
        $teknisi = Teknisi::where('kode_rs',Auth::user()->kode_rs)->get();
        $items = Ruangan::where('kode_rs',Auth::user()->kode_rs)->get();


        $kodeRs_ = "RSC0001";

        // KODE GEDUNG
        $dataGedung = DB::table('gedungs')
        ->select(DB::raw('max(id_gedung) as maxIDGEDUNG'))
        // ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeGedung = $dataGedung->maxIDGEDUNG;

        $urutanGedung = (int)substr($kodeGedung, 7, 8);
        $urutanGedung++;

        $kodeGedung = $kodeRs_ . sprintf("%03s", $urutanGedung);

        // KODE TEKNISI
        $dataTeknisi = DB::table('teknisis')
        ->select(DB::raw('max(id_teknisi) as maxIDTEKNISI'))
        // ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeTeknisi = $dataTeknisi->maxIDTEKNISI;

        $urutanTeknisi = (int)substr($kodeTeknisi, 7, 8);
        $urutanTeknisi++;

        $kodeTeknisi = $kodeRs_ . sprintf("%03s", $urutanTeknisi);

        // Kode Alat
        $dataAlat = DB::table('alats')
            ->select(DB::raw('max(id_alat) as maxIDALAT'))
            // ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAlat = $dataAlat->maxIDALAT;

        $urutanAlat = (int)substr($kodeAlat, 7, 8);
        $urutanAlat++;

        $kodeAlat = $kodeRs_ . sprintf("%04s", $urutanAlat);

        // Kode Lokasi
        $dataLokasi = DB::table('ruangans')
        ->select(DB::raw('max(id_ruangan) as maxIDLOKASI'))
        // ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeLokasi = $dataLokasi->maxIDLOKASI;

        $urutanLokasi = (int)substr($kodeLokasi, 7, 8);
        $urutanLokasi++;

        $kodeLokasi = $kodeRs_ . sprintf("%03s", $urutanLokasi);


        return view('pages.admin.ppm.data_kelengkapan.index',  [
            'gedung' => $gedung,
            'alats' => $alat,
            'teknisi' => $teknisi,
            'items' => $items,
            'kodeGedung' => $kodeGedung,
            'kodeAlat' => $kodeAlat,
            'kodeTeknisi' => $kodeTeknisi,
            'kodeLokasi' => $kodeLokasi,
        ]);
    }


}
