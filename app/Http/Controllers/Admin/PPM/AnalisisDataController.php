<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            ->whereRaw("kode_rs = '$kode_rs'")
        ->count();


        $t5_ = DB::table('registrasis')
        ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
        ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) > 5 AND (YEAR(CURDATE()) - tahun_perolehan) <= 10')
            ->whereRaw("kode_rs = '$kode_rs'")
        ->count();

        $t10 = DB::table('registrasis')
        ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
        ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) >= 10')
            ->whereRaw("kode_rs = '$kode_rs'")
        ->count();

        $semuaAlat = DB::table('registrasis')
        ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
            ->whereRaw("kode_rs = '$kode_rs'")
        ->get();

        $registered = DB::table('registrasis')
        ->whereNotNull('tanggal_kalibrasi')
        ->where('tanggal_kalibrasi', '!=', '-')
            ->whereRaw("kode_rs = '$kode_rs'")
            ->count();

        $unRegistered = DB::table('registrasis')
        ->where('tanggal_kalibrasi', '-')
            ->whereRaw("kode_rs = '$kode_rs'")
            ->count();

        $terpelihara = DB::table('registrasis')
            ->join('lembar_pemeliharaans', 'registrasis.id_aset', '=', 'lembar_pemeliharaans.id_aset')
            ->select('registrasis.id_aset')
            ->whereRaw("registrasis.kode_rs = '$kode_rs'")
        ->get();

        $unTerpelihara = DB::table('registrasis')->whereRaw("registrasis.kode_rs = '$kode_rs'")->count() - count($terpelihara);

        return view(
            'pages.admin.PPM.analisis_data.index',
            [
                't5' => $t5,
                't5_' => $t5_,
                't10' => $t10,
                'semuaAlat' => $semuaAlat,
                'registered' => $registered,
                'unRegistered' => $unRegistered,
                'terpelihara' => $terpelihara,
                'unTerpelihara' => $unTerpelihara,
            ]
        );
    }
}
