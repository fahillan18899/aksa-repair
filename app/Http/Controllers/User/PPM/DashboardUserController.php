<?php

namespace App\Http\Controllers\User\PPM;

use App\Models\Pesanan;
use App\Models\Registrasi;
use Illuminate\Support\Facades\DB;
use App\Models\PerbaikanRegistrasi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{


    public function index()
    {
        
        $userName_ = Auth::user()->username;
        $divisi = DB::table('users')->where('user_id', Auth::id())->value('rs_divisi');
        $registrasi = Registrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $alatTerkalibrasi      = Registrasi::where('kode_rs', Auth::user()->kode_rs)
        ->where('tanggal_kalibrasi', '!=', '')->whereNotNull('tanggal_kalibrasi')
        ->whereDate('tanggal_kalibrasi', '!=', '0000-00-00')->count();
        $itemPesanan = DB::table('pesanans')->where('kode_rs', Auth::user()->kode_rs)->where('pelapor_req', $divisi)->get();
        $dataPerbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('pelapor_reg', $divisi)->get();

        return view('pages.user.dashboard.index', 
        compact('registrasi', 'perbaikanRegistrasi', 'dataPerbaikan', 'itemPesanan', 'alatTerkalibrasi'));
    }

    //Fetch 
    public function getPerbaikanUser()
    {
        $divisi = DB::table('users')->where('user_id', Auth::id())->value('rs_divisi');
        $perbaikanUser = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('pelapor_reg', $divisi)->where('active', 1)->orderBy('created_at', 'desc')->get();
        return response()->json($perbaikanUser);
    }

    public function countPermintaan()
    {
        $divisi = DB::table('users')->where('user_id', Auth::id())->value('rs_divisi');
        $countPermintaan = Pesanan::where('kode_rs', Auth::user()->kode_rs)->where('pelapor_req', $divisi)->count();
        return response()->json(['countPermintaan' => $countPermintaan]);
    }

    public function countPerbaikan()
    {
        $divisi = DB::table('users')->where('user_id', Auth::id())->value('rs_divisi');
        $countPerbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('pelapor_reg', $divisi)->count();
        return response()->json(['countPerbaikan' => $countPerbaikan]);
    }
}
