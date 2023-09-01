<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\PerbaikanUnregistrasi;
use \App\Models\PengirimanUnregistrasi;
use \App\Models\PengembalianUnregistrasi;
use \App\Models\PenghapusanUnregistrasi;

class PengirimanUnregistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perbaikan     = PerbaikanUnregistrasi::all();
        $pengiriman    = PengirimanUnregistrasi::all();
        $pengembalian  = PengembalianUnregistrasi::all();
        $penghapusan   = PenghapusanUnregistrasi::all();

        return view('pages.admin.ppm.aset_unregistrasi.index', [
            
            'perbaikan'    => $perbaikan,
            'pengiriman'   => $pengiriman,
            'pengembalian' => $pengembalian,
            'penghapusan'  => $penghapusan,
        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'id_perbaikan_un' => '',
            'tanggal_perbaikan_un' => '',
            'tanggal_pengiriman_un' => '',
            'nama_alat_un' => '',
            'merek_alat_un' => '',
            'type_alat_un' => '',
            'serial_number_un' => '',
            'lokasi_alat_un' => '',
            'pelapor_un' => '',
            'keterangan_un' => '',
            'teknisi_1_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'nama_rekanan_un' => '',
            'alamat_rekanan_un' => '',
            'teknisi_rekanan_un' => '',
            'telphone_teknisi_rek_un' => '',
            'ka_instalasi_un' => '',
            'kode_rs' => '',
            'active' => '',


        ]);

        PengirimanUnregistrasi::create($request->post());

        return redirect()->route('aset_unregistrasi.index')
        ->with('success', 'Company has created been successfully.');
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
        $item = PengirimanUnregistrasi::where('id_perbaikan_un', $id)->first();
        return view('pages.admin.ppm.aset_unregistrasi.edit_pengiriman', compact('item'));
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

    public function cetak($id)
    {
        $item = PengirimanUnregistrasi::where('id_perbaikan_un', $id)->first();
        return view('pages.admin.ppm.aset_unregistrasi.cetak_pengiriman', compact('item'));
    }
}
