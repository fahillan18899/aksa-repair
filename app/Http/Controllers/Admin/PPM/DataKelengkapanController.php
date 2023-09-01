<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Gedung;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataKelengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedung  = Gedung::all();
        $alat    = Alat::all();
        $teknisi = Teknisi::all();
        $items = Ruangan::all();


        $kodeRs_ = "RSC0001";

        // KODE GEDUNG
        $dataGedung = DB::table('gedungs')
        ->select(DB::raw('max(id_gedung) as maxIDGEDUNG'))
        // ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeGedung = $dataGedung->maxIDGEDUNG;

        $urutanGedung = (int)substr($kodeGedung, 7, 8);
        $urutanGedung++;

        $kodeGedung = $kodeRs_ . sprintf("%03s", $urutanGedung);

        // KODE TEKNISI
        $dataTeknisi = DB::table('teknisis')
        ->select(DB::raw('max(id_teknisi) as maxIDTEKNISI'))
        // ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeTeknisi = $dataTeknisi->maxIDTEKNISI;

        $urutanTeknisi = (int)substr($kodeTeknisi, 7, 8);
        $urutanTeknisi++;

        $kodeTeknisi = $kodeRs_ . sprintf("%03s", $urutanTeknisi);

        // Kode Alat
        $dataAlat = DB::table('alats')
            ->select(DB::raw('max(id_alat) as maxIDALAT'))
            // ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAlat = $dataAlat->maxIDALAT;

        $urutanAlat = (int)substr($kodeAlat, 7, 8);
        $urutanAlat++;

        $kodeAlat = $kodeRs_ . sprintf("%04s", $urutanAlat);

        // Kode Lokasi
        $dataLokasi = DB::table('ruangans')
        ->select(DB::raw('max(id_ruangan) as maxIDLOKASI'))
        // ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeLokasi = $dataLokasi->maxIDLOKASI;

        $urutanLokasi = (int)substr($kodeLokasi, 7, 8);
        $urutanLokasi++;

        $kodeLokasi = $kodeRs_ . sprintf("%03s", $urutanLokasi);


        return view('pages.admin.ppm.data_kelengkapan.index',  [
            'gedung' => $gedung,
            'alats' => $alat,
            'teknisi' => $teknisi,
            'items' => $items,
            'kodeGedung' => $kodeGedung,
            'kodeAlat' => $kodeAlat,
            'kodeTeknisi' => $kodeTeknisi,
            'kodeLokasi' => $kodeLokasi,
        ]);
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
