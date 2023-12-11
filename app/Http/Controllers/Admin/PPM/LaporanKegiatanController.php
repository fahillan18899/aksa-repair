<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\LembarPemeliharaan;
use Illuminate\Support\Facades\Auth;

class LaporanKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regsitrasi          = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $unregsitrasi        = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $lembarpemeliharaan  = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->get();


        return view('pages.admin.PPM.laporan_kegiatan.index', [
            
            'regsitrasi'         => $regsitrasi, 
            'unregsitrasi'       => $unregsitrasi, 
            'lembarpemeliharaan' => $lembarpemeliharaan, 
        
        ]);
    }

}
