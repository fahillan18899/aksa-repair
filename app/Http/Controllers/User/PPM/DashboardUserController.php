<?php

namespace App\Http\Controllers\User\PPM;

use App\Http\Controllers\Controller;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\Registrasi;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function json()
    {
        $query = Registrasi::query()->select(['id_aset', 'jenis_alat', 'nama_alat', 'merek', 'type', 'gambar', 'serial_number', 'lokasi_alat', 'tanggal_kalibrasi', 'distributor', 'distributor', 'alamat_distributor', 'tlp_distributor', 'email_distributor', 'teknisi_distributor', 'tlp_t_distributor', 'no_sertifikat_kalibrasi', 'teknisi_ppm', 'harga_perolehan', 'sumber_dana', 'tahun_perolehan', 'akl', 'akd', 'no_inventaris_1', 'umur_alat', 'jadwal_pemeliharaan'])->where('kode_rs', Auth::user()->kode_rs);
        $c = Datatables::eloquent($query)->make(false);

        return $c;
    }

    public function index()
    {
        $registrasi = Registrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->count();

        return view('pages.user.dashboard.index',
            [
                'registrasi' => $registrasi,
                'perbaikanRegistrasi' => $perbaikanRegistrasi,
                'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
                'lembarPemeliharaan' => $lembarPemeliharaan,
            ]);
    }

    public function dashboard_teknisi()
    {
        $registrasi = Registrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->count();

        return view('pages.teknisi.dashboard.index',
            [
                'registrasi' => $registrasi,
                'perbaikanRegistrasi' => $perbaikanRegistrasi,
                'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
                'lembarPemeliharaan' => $lembarPemeliharaan,
            ]);
    }
}
