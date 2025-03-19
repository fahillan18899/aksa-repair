<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Alat;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\PerbaikanRegistrasi;
use App\Models\PengirimanRegistrasi;
use App\Models\PenghapusanRegistrasi;
use App\Models\PengembalianRegistrasi;

class PenghapusanRegistrasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg'        => 'unique:penghapusan_registrasis|required',
            'nama_alat_reg'           => '',
            'merek_alat_reg'          => '',
            'type_alat_reg'           => '',
            'serial_number_reg'       => '',
            'lokasi_alat_reg'         => '',
            'keterangan_pengguna_reg' => '',
            'kode_rs'                 => '',
        ], [
            'id_perbaikan_reg.required' => 'Kode Perbaikan Harus Diisi',
            'id_perbaikan_reg.unique' => 'Kode Perbaikan Sudah Ada',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;

        PerbaikanRegistrasi::where('id_perbaikan_reg', $request->id_perbaikan_reg)->update(['active' => 0]);
        PengirimanRegistrasi::where('id_perbaikan_reg', $request->id_perbaikan_reg)->update(['active' => 0]);
        PengembalianRegistrasi::where('id_perbaikan_reg', $request->id_perbaikan_reg)->update(['active' => 0]);
        PenghapusanRegistrasi::create($request->post());

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil Tambahkan ');
    }

    public function edit($id)
    {
        $kodeRs   = Auth::user()->kode_rs;
        $alats    = Alat::where('kode_rs', $kodeRs)->get();
        $teknisis = Teknisi::where('kode_rs', $kodeRs)->get();
        $ruangans = Ruangan::where('kode_rs', $kodeRs)->get();
        $item     = PenghapusanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', $kodeRs)->first();

        return view('pages.admin.PPM.aset_teregistrasi.update_penghapusan',
        compact('alats', 'teknisis', 'ruangans', 'item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_perbaikan_reg'        => 'unique:penghapusan_registrasis|required',
            'nama_alat_reg'           => '',
            'merek_alat_reg'          => '',
            'type_alat_reg'           => '',
            'serial_number_reg'       => '',
            'lokasi_alat_reg'         => '',
            'keterangan_pengguna_reg' => '',
            'kode_rs'                 => '',
        ]);
        $hapusRegistrasi = PenghapusanRegistrasi::findOrFail($id);
        $hapusRegistrasi->update($request->all());

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil Ubah. ');
    }

    public function cetak($id)
    {
        $item = PenghapusanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.cetak_penghapusan', compact('item'));
    }

    public function destroy($id)
    {
        $item = PenghapusanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/aset_teregistrasi')->with('success', 'Data Berhasil Di Hapus.');
    }
}
