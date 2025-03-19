<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Alat;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use App\Models\PengirimanRegistrasi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PengirimanRegistrasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg'         => 'unique:pengiriman_registrasis|required',
            'nama_alat_reg'            => '',
            'merek_alat_reg'           => '',
            'type_alat_reg'            => '',
            'seri_number_reg'          => '',
            'lokasi_alat_reg'          => '',
            'nama_rekan_reg'           => '',
            'alamat_rekan_reg'         => '',
            'teknisi_rekanan_reg'      => '',
            'telp_teknisi_rekanan_reg' => '',
            'kode_rs'                  => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;

        PengirimanRegistrasi::create($request->post());

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil Tambahkan.');
    }

    public function edit($id)
    {

        $kodeRs   = Auth::user()->kode_rs;
        $alats    = Alat::where('kode_rs', $kodeRs)->get();
        $teknisis = Teknisi::where('kode_rs', $kodeRs)->get();
        $ruangans = Ruangan::where('kode_rs', $kodeRs)->get();
        $item     = PengirimanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', $kodeRs)->first();

        return view('pages.admin.PPM.aset_teregistrasi.update_pengiriman',
        compact('alats', 'teknisis', 'ruangans', 'item'));
    }

    public function update(Request $request, $pengirimanRegistrasi)
    {
        $request->validate([
            'id_perbaikan_reg'         => '',
            'nama_alat_reg'            => '',
            'merek_alat_reg'           => '',
            'type_alat_reg'            => '',
            'seri_number_reg'          => '',
            'lokasi_alat_reg'          => '',
            'nama_rekan_reg'           => '',
            'alamat_rekan_reg'         => '',
            'teknisi_rekanan_reg'      => '',
            'telp_teknisi_rekanan_reg' => '',
            'kode_rs'                  => '',
        ]);

        $pengirimanRegistrasi = PengirimanRegistrasi::findOrFail($pengirimanRegistrasi);
        $pengirimanRegistrasi->update($request->all());

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil di Ubah');
    }

    public function cetak($id)
    {
        $item = PengirimanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.cetak_pengiriman', compact('item'));
    }

    public function destroy($id)
    {
        $item = PengirimanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/aset_teregistrasi')->with('success', 'Data Berhasil Di Hapus.');
    }
}
