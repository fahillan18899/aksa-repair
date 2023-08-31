<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\PengirimanRegistrasi;
use Illuminate\Http\Request;

class PengirimanRegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'tanggal_perbaikan_reg' => '',
            'tanggal_pengiriman_reg' => '',
            'id_aset_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'seri_number_reg' => '',
            'lokasi_alat_reg' => '',
            'teknisi_1_reg' => '',
            'pelapor_reg' => '',
            'teknisi_2_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'nama_rekan_reg' => '',
            'alamat_rekan_reg' => '',
            'teknisi_rekanan_reg' => '',
            'telp_teknisi_rekanan_reg' => '',
            'kode_rs' => ''
        ]);

        PengirimanRegistrasi::create($request->post());


        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengirimanRegistrasi  $pengirimanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function show(PengirimanRegistrasi $pengirimanRegistrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengirimanRegistrasi  $pengirimanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PengirimanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.update_perbaikan', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengirimanRegistrasi  $pengirimanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengirimanRegistrasi $pengirimanRegistrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengirimanRegistrasi  $pengirimanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengirimanRegistrasi $pengirimanRegistrasi)
    {
        //
    }

    public function cetak($id)
    {
        $item = PengirimanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.cetak_pengiriman', compact('item'));
    }
}
