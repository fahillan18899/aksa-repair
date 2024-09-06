<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\PengembalianUnregistrasi;
use App\Models\PenghapusanUnregistrasi;
use App\Models\PengirimanUnregistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianUnregistrasiController extends Controller
{
    public function index()
    {
        $perbaikan = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $pengiriman = PengirimanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $pengembalian = PengembalianUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $penghapusan = PenghapusanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.aset_unregistrasi.index', [
            'perbaikan' => $perbaikan,
            'pengiriman' => $pengiriman,
            'pengembalian' => $pengembalian,
            'penghapusan' => $penghapusan,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_un' => '',
            'tanggal_perbaikan_un' => '',
            'tanggal_pengembalian_un' => '',
            'nama_alat_un' => '',
            'peneriama_alat_un' => '',
            'merek_alat_un' => '',
            'ka_instalasi_un' => 'required',
            'type_alat_un' => '',
            'teknisi_1_un' => '',
            'serial_number_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'lokasi_alat_un' => '',
            'keterangan_un' => '',
            'pelapor_un' => '',
            'suku_cadang_un' => '',
            'volume_un' => '',
            'harga_satuan_un' => '',
            'jumlah_harga_un' => '',
            'harga_perbaikan_un' => '',
            'penyebab_kerusakan_un' => '',
            'pengujian_suku_cadang_un' => '',
            'uji_fungsi_setelah_perbaikan_un' => '',
            'solusi_perbaikan_un' => '',
            'penggantian_suku_cadang_un' => '',
            'hasil_verifikasi_un' => '',
            'kode_rs' => '',
            'active' => '',
        ], [
            'ka_instalasi_un.required' => 'KA Instalasi Harus Diisi',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        PengembalianUnregistrasi::create($request->post());

        return redirect()->route('aset_unregistrasi.index')
            ->with('success', 'Data Pengemalian Unregistrasi Berhasil di Tambahkan.');
    }

    public function edit($id)
    {

        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PengembalianUnregistrasi::where('id_perbaikan_un', $id)->first();

        return view('pages.admin.PPM.aset_unregistrasi.edit_pengembalian', [
            'alats' => $alats,
            'ruangans' => $ruangans,
            'item' => $item,
            'teknisis' => $teknisis,
        ]);
    }

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
            'suku_cadang_un' => '',
            'volume_un' => '',
            'harga_satuan_un' => '',
            'jumlah_harga_un' => '',
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

    public function cetak($id)
    {
        $item = PengembalianUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.aset_unregistrasi.cetak_pengembalian', compact('item'));
    }

    public function destroy($id)
    {
        $item = PengembalianUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard/ppm/aset_unregistrasi')->with('success', 'Data Berhasil Di Hapus.');
    }
}
