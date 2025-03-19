<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Alat;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PengembalianRegistrasi;

class PengembalianRegistrasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg'          => 'unique:pengembalian_registrasis|required',
            'nama_alat_reg'             => '',
            'merek_reg'                 => '',
            'tipe_reg'                  => '',
            'serial_number_reg'         => '',
            'lokasi_alat_reg'           => '',
            'penerima_reg'              => '',
            'harga_perbaikan_reg'       => '',
            'penyebab_kerusakan_reg'    => '',
            'solusi_perbaikan_reg'      => '',
            'penguji_suku_cadang_reg'   => '',
            'hasil_verifikasi_reg'      => '',
            'hasil_fungsi_reg'          => '',
            'pengganti_suku_cadang_reg' => '',
            'kode_rs'                   => '',
            'active'                    => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;

        PengembalianRegistrasi::create($request->post());

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil Tambahkan');
    }

    public function edit($id)
    {
        $kodeRs   = Auth::user()->kode_rs;
        $alats    = Alat::where('kode_rs', $kodeRs)->get();
        $teknisis = Teknisi::where('kode_rs', $kodeRs)->get();
        $ruangans = Ruangan::where('kode_rs', $kodeRs)->get();
        $item     = PengembalianRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', $kodeRs)->first();

        return view('pages.admin.PPM.aset_teregistrasi.update_pengembalian',
        compact('alats', 'teknisis', 'ruangans', 'item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_perbaikan_reg'          => '',
            'id_aset_reg'               => '',
            'nama_alat_reg'             => '',
            'merek_reg'                 => '',
            'tipe_reg'                  => '',
            'serial_number_reg'         => '',
            'lokasi_alat_reg'           => '',
            'penerima_reg'              => '',
            'harga_perbaikan_reg'       => '',
            'penyebab_kerusakan_reg'    => '',
            'solusi_perbaikan_reg'      => '',
            'penguji_suku_cadang_reg'   => '',
            'hasil_verifikasi_reg'      => '',
            'hasil_fungsi_reg'          => '',
            'pengganti_suku_cadang_reg' => '',
            'kode_rs'                   => '',
            'active'                    => '',
        ]);

        $pengembalianRegistrasi = PengembalianRegistrasi::findOrFail($id);
        $pengembalianRegistrasi->update($request->post());

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil di Ubah');
    }

    public function cetak($id)
    {
        $item = PengembalianRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.cetak_pengembalian', compact('item'));
    }

    public function destroy($id)
    {
        $item = PengembalianRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/aset_teregistrasi')->with('success', 'Data Berhasil Di Hapus.');
    }
}
