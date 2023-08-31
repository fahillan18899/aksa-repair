<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalisisDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $t5 = DB::table('registrasis')
        ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
        ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) < 5')
        ->count();

        $t5_ = DB::table('registrasis')
        ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
        ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) > 5 AND (YEAR(CURDATE()) - tahun_perolehan) <= 10')
        ->count();

        $t10 = DB::table('registrasis')
        ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
        ->whereRaw('(YEAR(CURDATE()) - tahun_perolehan) >= 10')
        ->count();

        $semuaAlat = DB::table('registrasis')
        ->select(DB::raw('(YEAR(CURDATE()) - tahun_perolehan) AS umurAlat'))
        ->get();

        $registered = DB::table('registrasis')
        ->whereNotNull('tanggal_kalibrasi')
        ->where('tanggal_kalibrasi', '!=', '-')
            ->count();

        $unRegistered = DB::table('registrasis')
        ->where('tanggal_kalibrasi', '-')
            ->count();

        $terpelihara = DB::table('registrasis')
        ->join('lembar_pemeliharaans', 'registrasis.Id_Aset', '=', 'lembar_pemeliharaans.id_aset')
        ->select('registrasis.Id_Aset')
        ->get();

        $unTerpelihara = DB::table('registrasis')->count() - count($terpelihara);

        return view(
            'pages.admin.ppm.analisis_data.index',
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
