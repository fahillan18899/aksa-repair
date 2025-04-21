<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Models\Registrasi;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\PerbaikanUnregistrasi;
use Yajra\DataTables\Facades\DataTables;

class DashboardUserController extends Controller
{
    
    public function dashboard_teknisi()
    {
        $kodeRs                = Auth::user()->kode_rs;
        $registrasi            = Registrasi::where('kode_rs', $kodeRs)->count();
        $lembarPemeliharaan    = LembarPemeliharaan::where('kode_rs', $kodeRs)->count();
        $perbaikanRegistrasi   = PerbaikanRegistrasi::where('kode_rs', $kodeRs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs', $kodeRs)->count();

        return view('pages.teknisi.dashboard.index',
        compact('registrasi', 'perbaikanRegistrasi', 'perbaikanUnregistrasi', 'lembarPemeliharaan'));
    }

    
    // public function index()
    // {
    //     $registrasi = Registrasi::where('kode_rs', Auth::user()->kode_rs)->count();
    //     $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
    //     $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
    //     $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->count();

    //     return view('pages.teknisi.dashboard.index',
    //     compact('registrasi', 'perbaikanRegistrasi', 'perbaikanUnregistrasi', 'lembarPemeliharaan'));
    // }

    // public function json()
    // {
    //     $query = Registrasi::query()->select(['id_aset', 'jenis_alat', 'nama_alat', 'merek', 'type', 'gambar', 'serial_number', 
    //     'lokasi_alat', 'tanggal_kalibrasi', 'distributor', 'distributor', 'alamat_distributor', 'tlp_distributor', 'email_distributor', 
    //     'teknisi_distributor', 'tlp_t_distributor', 'no_sertifikat_kalibrasi', 'teknisi_ppm', 'harga_perolehan', 'sumber_dana', 
    //     'tahun_perolehan', 'akl', 'akd', 'no_inventaris_1', 'umur_alat', 'jadwal_pemeliharaan'])
    //     ->where('kode_rs', Auth::user()->kode_rs);
    //     $c = DataTables::eloquent($query)->make(false);

    //     return $c;
    // }
}
