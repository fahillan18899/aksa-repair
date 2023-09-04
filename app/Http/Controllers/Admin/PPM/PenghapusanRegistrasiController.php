<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;

use App\Models\PenghapusanRegistrasi;
use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\Teknisi;
use App\Models\Ruangan;

class PenghapusanRegistrasiController extends Controller
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
            'id_perbaikan_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'tanggal_penggudangan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'ka_instalasi_reg' => '',
            'keterangan_pengguna_reg' => '',
            'kode_rs' => '',
        ]);

        PenghapusanRegistrasi::create($request->post());


        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenghapusanRegistrasi  $penghapusanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function show(PenghapusanRegistrasi $penghapusanRegistrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenghapusanRegistrasi  $penghapusanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $alats         = Alat::all();
        $teknisis      = Teknisi::all();
        $ruangans      = Ruangan::all();
        $item = PenghapusanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.update_penghapusan', [
            
            'alats'        => $alats,
            'item' => $item,
            'teknisis'      => $teknisis,
            'ruangans'     => $ruangans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenghapusanRegistrasi  $penghapusanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $request->validate([
            'id_perbaikan_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'tanggal_penggudangan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'ka_instalasi_reg' => '',
            'keterangan_pengguna_reg' => '',
            'kode_rs' => '',
        ]);
        $hapusRegistrasi = PenghapusanRegistrasi::findOrFail($id);
        $hapusRegistrasi->update($request->all());
        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenghapusanRegistrasi  $penghapusanRegistrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenghapusanRegistrasi $penghapusanRegistrasi)
    {
        //
    }

    public function cetak($id)
    {
        $item = PenghapusanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.cetak_penghapusan', compact('item'));
    }
}
