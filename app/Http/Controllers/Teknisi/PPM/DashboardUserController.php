<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Models\Pesanan;
use App\Models\Registrasi;
use App\Models\PerbaikanRegistrasi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    
    public function dashboard_teknisi()
    {
        $kodeRs                = Auth::user()->kode_rs;
        $registrasi            = Registrasi::where('kode_rs', $kodeRs)->count();
        $alatTerkalibrasi      = Registrasi::where('kode_rs', $kodeRs)
        ->where('tanggal_kalibrasi', '!=', '')->whereNotNull('tanggal_kalibrasi')
        ->whereDate('tanggal_kalibrasi', '!=', '0000-00-00')->count();
        $perbaikanRegistrasi   = PerbaikanRegistrasi::where('kode_rs', $kodeRs)->count();

        return view('pages.teknisi.dashboard.index',
        compact('registrasi', 'perbaikanRegistrasi', 'alatTerkalibrasi'));
    }

    //Fetch
    public function getPermintaanUser()
    {
        $permintaanUser = Pesanan::where('kode_rs', Auth::user()->kode_rs)->orderBy('created_at', 'desc')->get();
        return response()->json($permintaanUser);
    }
    
    public function getPerbaikanTeknisi()
    {
     $perbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->orderBy('created_at', 'desc')->get();
     return response()->json($perbaikan);   
    }
    
    public function countPermintaan()
    {
        $countPermintaan = Pesanan::where('kode_rs', Auth::user()->kode_rs)->count();
        return response()->json(['countPermintaan' => $countPermintaan]);
    }

    public function countPerbaikan()
    {
        $countPerbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        return response()->json(['countPerbaikan' => $countPerbaikan]);
    }
}
