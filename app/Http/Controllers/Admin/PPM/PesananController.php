<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Registrasi;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kodeRs_ = Auth::user()->kode_rs;
        $items = DB::table('pesanans')->where('kode_rs', $kodeRs_)->get();
        $dataInv = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.pesanan.index', [

            'items' => $items,
            'dataInv' => $dataInv
            
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
        $dataPesanan =  $request->validate([
            'id' => 'unique:pesanans',
            'nama_req' => '',
            'merek_req' => '',
            'type_req' => '',
            'sn_req' => '',
            'kerusakan_req' => '',
            'pelapor_req' => '',
            'tanggal_req' => '',
            'kode_rs' => '',
        ], [
            'id.unique' => 'Aset Sudah Dilaporkan'
        ]);

        $dataPesanan['kode_rs'] = Auth::user()->kode_rs;
        Pesanan::create($dataPesanan);
        return redirect('/dashboard/ppm/pesanan')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
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
        $item = Pesanan::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/pesanan')->with('success', 'Aset Telah Selesai Diperbaiki.');
    }

    public function getPesanan($id)
    {
      $pesanan = Registrasi::where("id_aset", $id)->get();
      return json_encode($pesanan);
    }
}
