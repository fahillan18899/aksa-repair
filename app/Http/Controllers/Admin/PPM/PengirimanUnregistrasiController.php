<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\PerbaikanUnregistrasi;
use \App\Models\PengirimanUnregistrasi;
use \App\Models\PengembalianUnregistrasi;
use \App\Models\PenghapusanUnregistrasi;
use App\Models\Ruangan;
use App\Models\Teknisi;
use App\Models\Alat;
use Illuminate\Support\Facades\Auth;

class PengirimanUnregistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perbaikan     = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $pengiriman    = PengirimanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $pengembalian  = PengembalianUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $penghapusan   = PenghapusanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.aset_unregistrasi.index', [
            
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
            'pelapor_un' => 'required',
            'keterangan_un' => 'required',
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
        ], [
            'pelapor_un.required' => 'Pelapor Tidak Boleh Kosong',
            'keterangan_un.required' => 'Keterangan Tidak Boleh Kosong'
            ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        PengirimanUnregistrasi::create($request->post());

        return redirect()->route('aset_unregistrasi.index')
        ->with('success', 'Data Pengiriman Berhasil Di Tambahkan.');
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

        $alats         = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis      = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans      = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PengirimanUnregistrasi::where('id_perbaikan_un', $id)->first();
        return view('pages.admin.PPM.aset_unregistrasi.edit_pengiriman', [
            
            'alats'    => $alats,
            'ruangans' => $ruangans,
            'item'     => $item,
            'teknisis' => $teknisis,

        ]);
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

        $pengirimanRegistrasi = PengirimanUnregistrasi::findOrFail($id);
        $pengirimanRegistrasi->update($request->all());

        return redirect()->route('aset_unregistrasi.index')
        ->with('success', 'Data Pengiriman Unregistrasi Berhasil di Ubah.');
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
        $item = PengirimanUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_unregistrasi.cetak_pengiriman', compact('item'));
    }
}
