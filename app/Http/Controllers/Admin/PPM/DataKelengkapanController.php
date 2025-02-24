<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Gedung;
use App\Models\Nomklatur;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataKelengkapanController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function index()
    {
        $gedung    = Gedung::where('kode_rs', Auth::user()->kode_rs)->get();
        $alat      = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisi   = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $lokasi    = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $nomklatur = Nomklatur::where('kode_rs', Auth::user()->kode_rs)->get();

        $kodeRs_ = Auth::user()->kode_rs;

        // KODE GEDUNG
        $dataGedung = DB::table('gedungs')
            ->select(DB::raw('max(id_gedung) as maxIDGEDUNG'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeGedung = $dataGedung->maxIDGEDUNG;
        $kodeGedung = $this->helper->formatKodeKelengkapan($kodeGedung, $kodeRs_);

        // KODE ALAT
        $dataAlat = DB::table('alats')
            ->select(DB::raw('max(id_alat) as maxIDALAT'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAlat = $dataAlat->maxIDALAT;
        $kodeAlat = $this->helper->formatKodeKelengkapan($kodeAlat, $kodeRs_);

        // KODE TEKNISI
        $dataTeknisi = DB::table('teknisis')
            ->select(DB::raw('max(id_teknisi) as maxIDTEKNISI'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeTeknisi = $dataTeknisi->maxIDTEKNISI;
        $kodeTeknisi = $this->helper->formatKodeKelengkapan($kodeTeknisi, $kodeRs_);

        // KODE LOKASI
        $dataLokasi = DB::table('ruangans')
            ->select(DB::raw('max(id_ruangan) as maxIDLOKASI'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeLokasi = $dataLokasi->maxIDLOKASI;
        $kodeLokasi = $this->helper->formatKodeKelengkapan($kodeLokasi, $kodeRs_);

        // KODE NOMKLATUR
        $dataAlat = DB::table('nomklaturs')
            ->select(DB::raw('max(id_nomklatur) as maxIDALAT'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAlat2 = $dataAlat->maxIDALAT;
        $kodeAlat2 = $this->helper->formatKodeKelengkapan2($kodeAlat2, $kodeRs_);

        return view('pages.admin.PPM.data_kelengkapan.index',
        
        compact('gedung', 'alat', 'teknisi', 'lokasi', 'nomklatur',
                'kodeGedung', 'kodeAlat', 'kodeTeknisi', 'kodeLokasi', 'kodeAlat2'));
    }
}
