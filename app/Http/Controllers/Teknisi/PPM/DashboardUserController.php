<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Http\Controllers\Controller;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasi = Registrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs',Auth::user()->kode_rs)->count();
        return view('pages.teknisi.dashboard.index',
        [
            'registrasi' => $registrasi,
            'perbaikanRegistrasi' => $perbaikanRegistrasi,
            'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
            'lembarPemeliharaan' => $lembarPemeliharaan
        ]);
    }

    public function dashboard_teknisi()
    {
        $registrasi = Registrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs',Auth::user()->kode_rs)->count();
        return view('pages.teknisi.dashboard.index',
        [
            'registrasi' => $registrasi,
            'perbaikanRegistrasi' => $perbaikanRegistrasi,
            'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
            'lembarPemeliharaan' => $lembarPemeliharaan
        ]);
    }

   
}
