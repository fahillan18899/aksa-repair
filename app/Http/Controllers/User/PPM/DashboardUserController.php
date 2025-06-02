<?php

namespace App\Http\Controllers\User\PPM;

use App\Http\Controllers\Controller;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use App\Models\Registrasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{


    public function index()
    {
        
        $userName_ = Auth::user()->username;
        $divisi = DB::table('users')->where('user_id', Auth::id())->value('rs_divisi');
        $registrasi = Registrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $itemPesanan = DB::table('pesanans')->where('kode_rs', Auth::user()->kode_rs)->where('pelapor_req', $divisi)->get();
        $dataPerbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('pelapor_reg', $divisi)->get();

        return view('pages.user.dashboard.index', 
        compact('registrasi', 'perbaikanRegistrasi', 'dataPerbaikan', 'itemPesanan', 'lembarPemeliharaan'));
    }

    public function getPerbaikanUser()
    {
        $divisi = DB::table('users')->where('user_id', Auth::id())->value('rs_divisi');
        $perbaikanUser = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('pelapor_reg', $divisi)->where('active', 1)->orderBy('created_at', 'desc')->get();
        return response()->json($perbaikanUser);
    }

    // public function dashboard_teknisi()
    // {
    //     $registrasi = Registrasi::where('kode_rs', Auth::user()->kode_rs)->count();
    //     $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
    //     $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
    //     $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->count();

    //     return view('pages.teknisi.dashboard.index',
    //         [
    //             'registrasi' => $registrasi,
    //             'perbaikanRegistrasi' => $perbaikanRegistrasi,
    //             'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
    //             'lembarPemeliharaan' => $lembarPemeliharaan,
    //         ]);
    // }

        // public function json()
    // {
    //     $query = Registrasi::query()->select(['id_aset', 'jenis_alat', 'nama_alat', 'merek', 'type', 'gambar', 'serial_number', 'lokasi_alat', 'tanggal_kalibrasi', 'distributor', 'distributor', 'alamat_distributor', 'tlp_distributor', 'email_distributor', 'teknisi_distributor', 'tlp_t_distributor', 'no_sertifikat_kalibrasi', 'teknisi_ppm', 'harga_perolehan', 'sumber_dana', 'tahun_perolehan', 'akl', 'akd', 'no_inventaris_1', 'umur_alat', 'jadwal_pemeliharaan'])->where('kode_rs', Auth::user()->kode_rs);
    //     $c = Datatables::eloquent($query)->make(false);

    //     return $c;
    // }
}
