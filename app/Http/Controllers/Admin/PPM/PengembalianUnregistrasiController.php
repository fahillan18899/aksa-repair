<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\PerbaikanUnregistrasi;
use \App\Models\PengirimanUnregistrasi;
use \App\Models\PengembalianUnregistrasi;
use \App\Models\PenghapusanUnregistrasi;

class PengembalianUnregistrasiController extends Controller
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
            'tanggal_pengembalian_un' => '',
            'nama_alat_un' => '',
            'peneriama_alat_un' => '',
            'merek_alat_un' => '',
            'ka_instalasi_un' => '',
            'type_alat_un' => '',
            'teknisi_1_un' => '',
            'serial_number_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'lokasi_alat_un' => '',
            'keterangan_un' => '',
            'pelapor_un' => '',
            'harga_perbaikan_un' => '',
            'penyebab_kerusakan_un' => '',
            'pengujian_suku_cadang_un' => '',
            'uji_fungsi_setelah_perbaikan_un' => '',
            'solusi_perbaikan_un' => '',
            'penggantian_suku_cadang_un' => '',
            'hasil_verifikasi_un' => '',
            'kode_rs' => '',
            'active' => '',
        ]);

        PengembalianUnregistrasi::create($request->post());

        return redirect()->route('aset_unregistrasi.index')
        ->with('success', 'Data Pengemalian Unregistrasi Berhasil di Tambahkan.');
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
        $item = PengembalianUnregistrasi::where('id_perbaikan_un', $id)->first();
        return view('pages.admin.ppm.aset_unregistrasi.edit_pengembalian', compact('item'));
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
        $request->validate([
            'id_perbaikan_un' => '',
            'tanggal_perbaikan_un' => '',
            'tanggal_pengembalian_un' => '',
            'nama_alat_un' => '',
            'peneriama_alat_un' => '',
            'merek_alat_un' => '',
            'ka_instalasi_un' => '',
            'type_alat_un' => '',
            'teknisi_1_un' => '',
            'serial_number_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'lokasi_alat_un' => '',
            'keterangan_un' => '',
            'pelapor_un' => '',
            'harga_perbaikan_un' => '',
            'penyebab_kerusakan_un' => '',
            'pengujian_suku_cadang_un' => '',
            'uji_fungsi_setelah_perbaikan_un' => '',
            'solusi_perbaikan_un' => '',
            'penggantian_suku_cadang_un' => '',
            'hasil_verifikasi_un' => '',
            'kode_rs' => '',
            'active' => '',
        ]);

        $pengembalianUnRegistrasi = PengembalianUnregistrasi::findOrFail($id);
        $pengembalianUnRegistrasi->update($request->all());

        return redirect()->route('aset_unregistrasi.index')
        ->with('success', 'Data Pengemalian Unregistrasi Berhasil di Ubah.');
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
        $item = PengembalianUnregistrasi::where('id_perbaikan_un', $id)->first();
        return view('pages.admin.ppm.aset_unregistrasi.cetak_pengembalian', compact('item'));
    }

}
