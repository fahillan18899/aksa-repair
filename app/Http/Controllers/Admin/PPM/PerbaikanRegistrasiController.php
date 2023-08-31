<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerbaikanRegistrasi;
use App\Models\PengirimanRegistrasi;
use App\Models\PengembalianRegistrasi;
use App\Models\PenghapusanRegistrasi;
use App\Models\Registrasi;
use Illuminate\Support\Facades\DB;


class PerbaikanRegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PerbaikanRegistrasi::all();
        $result_pengiriman = PengirimanRegistrasi::all();
        $result_penghapusan = PenghapusanRegistrasi::all();
        $result_pengembalian = PengembalianRegistrasi::all();
        return view('pages.admin.ppm.aset_teregistrasi.index', [
            'items' => $items,
            'result_pengembalian' => $result_pengembalian,
            'result_penghapusan' => $result_penghapusan,
            'result_pengiriman' => $result_pengiriman
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
            'id_perbaikan_reg' => '',
            'id_aset_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'keluhan_dari_alat_reg' => '',
            'korektif_reg' => '',
            'active' => ''
        ]);

        PerbaikanRegistrasi::create($request->post());


        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Company has been created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.update_perbaikan', compact('item'));
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerbaikanRegistrasi $perbaikanRegistrasi)
    {
        $request->validate([
            'tanggal_perbaikan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'keluhan_dari_alat_reg' => '',
            'korektif_reg' => '',
            'kode_rs' => '',
            'active' => ''
        ]);


        $perbaikanRegistrasi->fill($request->post())->save();


        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Perbaikan Teregistrasi berhasil di ubah');
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function cetak($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.cetak_perbaikan', compact('item'));
    }
}
