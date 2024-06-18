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

class PenghapusanUnregistrasiController extends Controller
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
            'nama_alat_un' => '',
            'merek_alat_un' => '',
            'type_alat_un' => '',
            'serial_number_un' => '',
            'lokasi_alat_un' => '',
            'pelapor_un' => '',
            'teknisi_1_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'tanggal_penggudangan_un' => '',
            'ka_instalasi_un' => 'required',
            'keterangan_penggudangan_un' => 'required',
            'kode_rs' => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        PerbaikanUnregistrasi::where('id_perbaikan_un', $request->id_perbaikan_un)->update(['active' => 0]);
        PengirimanUnregistrasi::where('id_perbaikan_un', $request->id_perbaikan_un)->update(['active' => 0]);
        PengembalianUnregistrasi::where('id_perbaikan_un', $request->id_perbaikan_un)->update(['active' => 0]);
        PenghapusanUnregistrasi::create($request->post());

        return redirect()->route('aset_unregistrasi.index')
            ->with('success', 'Data Penghapusan Unregistrasi Berhasil di Tambahkan.');
    }

    public function edit($id)
    {

        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PenghapusanUnregistrasi::where('id_perbaikan_un', $id)->first();

        return view('pages.admin.PPM.aset_unregistrasi.edit_penghapusan', [
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
            'nama_alat_un' => '',
            'merek_alat_un' => '',
            'type_alat_un' => '',
            'serial_number_un' => '',
            'lokasi_alat_un' => '',
            'pelapor_un' => '',
            'teknisi_1_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'tanggal_penggudangan_un' => '',
            'ka_instalasi_un' => '',
            'keterangan_penggudangan_un' => '',
            'kode_rs' => '',
        ]);

        $PenghapusanUnRegistrasi = PenghapusanUnregistrasi::findOrFail($id);
        $PenghapusanUnRegistrasi->update($request->all());

        return redirect()->route('aset_unregistrasi.index')
            ->with('success', 'Data Penghapusan Unregistrasi Berhasil di Ubah.');
    }

    public function cetak($id)
    {
        $item = PenghapusanUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.aset_unregistrasi.cetak_penggudangan', compact('item'));
    }
}
