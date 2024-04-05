<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnalisisDataController extends Controller
{
    public function index()
    {
        $kode_rs = Auth::user()->kode_rs;

        $t5 = DB::table('registrasis')
            ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
            ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) < 5')
            ->whereRaw("kode_rs = '{$kode_rs}'")
            ->count();

        $t5_ = DB::table('registrasis')
            ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
            ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) > 5 AND (YEAR(CURDATE()) - tahun_perolehan) <= 10')
            ->whereRaw("kode_rs = '{$kode_rs}'")
            ->count();

        $t10 = DB::table('registrasis')
            ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
            ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) >= 10')
            ->whereRaw("kode_rs = '{$kode_rs}'")
            ->count();

        $semuaAlat = DB::table('registrasis')
            ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
            ->whereRaw("kode_rs = '{$kode_rs}'")
            ->get();

        $registered = DB::table('registrasis')
            ->whereNotNull('tanggal_kalibrasi')
            ->where('tanggal_kalibrasi', '!=', '-')
            ->whereRaw("kode_rs = '{$kode_rs}'")
            ->count();

        $unRegistered = DB::table('registrasis')
        ->where('tanggal_kalibrasi', NULL)
            ->whereRaw("kode_rs = '$kode_rs'")
            ->count();

        $perbaikan = DB::table('perbaikan_registrasis')
            ->whereNotNull('id_perbaikan_reg')
            ->whereRaw("perbaikan_registrasis.kode_rs = '$kode_rs'")
        ->count();

        $perbaikanUn = DB::table('perbaikan_unregistrasis')
        ->whereNotNull('id_perbaikan_un')
        ->whereRaw("perbaikan_unregistrasis.kode_rs = '$kode_rs'")
        ->count();

        $totalAlat = DB::table('registrasis')
        ->whereNotNull('id_aset')
        ->whereRaw("registrasis.kode_rs = '$kode_rs'")
        ->count();

        return view(
            'pages.admin.PPM.analisis_data.index',
            [
                't5' => $t5,
                't5_' => $t5_,
                't10' => $t10,
                'semuaAlat' => $semuaAlat,
                'registered' => $registered,
                'unRegistered' => $unRegistered,
                'perbaikan' => $perbaikan,
                'perbaikanUn' => $perbaikanUn,
                'totalAlat' => $totalAlat,
            ]
        );
    }
}
