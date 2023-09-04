<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;

use App\Models\PengembalianRegistrasi;
use Illuminate\Http\Request;
use App\Models\Teknisi;
use App\Models\Ruangan;

class PengembalianRegistrasiController extends Controller
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
            'id_aset_reg' => '',
            'nama_alat_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'merek_reg' => '',
            'id_perbaikan_reg' => '',
            'tipe_reg' => '',
            'tanggal_pengembalian_reg' => '',
            'serial_number_reg' => '',
            'pelapor_reg' => '',
            'lokasi_alat_reg' => '',
            'keterangan_reg' => '',
            'penerima_reg' => '',
            'harga_perbaikan_reg' => '',
            'teknisi1_reg' => '',
            'teknisi2_reg' => '',
            'teknisi3_reg' => '',
            'ka_instalasi_reg' => '',
            'penyebab_kerusakan_reg' => '',
            'solusi_perbaikan_reg' => '',
            'penguji_suku_cadang_reg' => '',
            'hasil_verifikasi_reg' => '',
            'hasil_fungsi_reg' => '',
            'pengganti_suku_cadang_reg' => '',
            'kode_rs' => '',
            'active' => '',
        ]);

        PengembalianRegistrasi::create($request->post());


        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengembalianRegistrasi  $pengembalianRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function show(PengembalianRegistrasi $pengembalianRegistrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengembalianRegistrasi  $pengembalianRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
        $teknisis      = Teknisi::all();
        $ruangans      = Ruangan::all();
        $item = PengembalianRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.update_pengembalian', [
            
            'item' => $item,
            'teknisis'      => $teknisis,
            'ruangans'     => $ruangans,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengembalianRegistrasi  $pengembalianRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'id_aset_reg' => '',
            'nama_alat_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'merek_reg' => '',
            'id_perbaikan_reg' => '',
            'tipe_reg' => '',
            'tanggal_pengembalian_reg' => '',
            'serial_number_reg' => '',
            'pelapor_reg' => '',
            'lokasi_alat_reg' => '',
            'keterangan_reg' => '',
            'penerima_reg' => '',
            'harga_perbaikan_reg' => '',
            'teknisi1_reg' => '',
            'teknisi2_reg' => '',
            'teknisi3_reg' => '',
            'ka_instalasi_reg' => '',
            'penyebab_kerusakan_reg' => '',
            'solusi_perbaikan_reg' => '',
            'penguji_suku_cadang_reg' => '',
            'hasil_verifikasi_reg' => '',
            'hasil_fungsi_reg' => '',
            'pengganti_suku_cadang_reg' => '',
        ]);

        $perbaikanRegistrasi = PengembalianRegistrasi::findOrFail($id);
        $perbaikanRegistrasi->update($request->all());



        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengembalianRegistrasi  $pengembalianRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengembalianRegistrasi $pengembalianRegistrasi)
    {
        //
    }

    public function cetak($id)
    {
        $item = PengembalianRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.cetak_pengembalian', compact('item'));
    }
}
