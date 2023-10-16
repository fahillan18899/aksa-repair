<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;

use App\Models\PengembalianRegistrasi;
use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Auth;

class PengembalianRegistrasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_aset_reg' => '',
            'nama_alat_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'merek_reg' => '',
            'id_perbaikan_reg' => 'unique:pengembalian_registrasis|required',
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
            'suku_cadang' => '',
            'volume' => '',
            'harga_satuan' => '',
            'jumlah_harga' => '',
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
        $request['kode_rs'] = Auth::user()->kode_rs;

        PengembalianRegistrasi::create($request->post());


        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil Tambahkan');
    }

    public function edit($id)
    {

        $alats         = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis      = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans      = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PengembalianRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.update_pengembalian', [
            
            'alats'        => $alats,
            'item' => $item,
            'teknisis'      => $teknisis,
            'ruangans'     => $ruangans,

        ]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'id_aset_reg' => '',
            'nama_alat_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'merek_reg' => '',
            'id_perbaikan_reg' => 'unique:pengembalian_registrasis',
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

        $perbaikanRegistrasi = PengembalianRegistrasi::findOrFail($id);
        $perbaikanRegistrasi->update($request->all());



        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil di ubah');
    }

    public function cetak($id)
    {
        $item = PengembalianRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.cetak_pengembalian', compact('item'));
    }
}
