<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\PengirimanRegistrasi;
use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Auth;

class PengirimanRegistrasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg' => 'unique:pengiriman_registrasis|required',
            'tanggal_perbaikan_reg' => '',
            'tanggal_pengiriman_reg' => '',
            'id_aset_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'seri_number_reg' => '',
            'lokasi_alat_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'suku_cadang' => '',
            'volume' => '',
            'harga_satuan' => '',
            'jumlah_harga' => '',
            'pelapor_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'nama_rekan_reg' => '',
            'alamat_rekan_reg' => '',
            'teknisi_rekanan_reg' => '',
            'telp_teknisi_rekanan_reg' => '',
            'kode_rs' => ''
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;

        PengirimanRegistrasi::create($request->post());

        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil Tambahkan.');
    }

    public function edit($id)
    {

        $alats         = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis      = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans      = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PengirimanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.update_pengiriman', [
            'alats'        => $alats,
            'item' => $item,
            'teknisis'      => $teknisis,
            'ruangans'     => $ruangans,
        ]);
    }

   
    public function update(Request $request, $pengirimanRegistrasi)
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
