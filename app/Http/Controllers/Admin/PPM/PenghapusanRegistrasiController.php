<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;

use App\Models\PenghapusanRegistrasi;
use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\PengembalianRegistrasi;
use App\Models\PengirimanRegistrasi;
use App\Models\PerbaikanRegistrasi;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Auth;

class PenghapusanRegistrasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg' => 'unique:penghapusan_registrasis|required',
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
            'suku_cadang' => '',
            'volume' => '',
            'harga_satuan' => '',
            'jumlah_harga' => '',
            'ka_instalasi_reg' => '',
            'keterangan_pengguna_reg' => '',
            'kode_rs' => '',
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
        $alats         = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis      = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans      = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PenghapusanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.update_penghapusan', [
            'alats'        => $alats,
            'item' => $item,
            'teknisis'      => $teknisis,
            'ruangans '     => $ruangans,
        ]);
    }

    public function update(Request $request,  $id)
    {

        $request->validate(['id_perbaikan_reg' => 'unique:penghapusan_registrasis',
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
        ->with('success', 'Data Berhasil Ubah. ');
    }
    
    public function cetak($id)
    {
        $item = PenghapusanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.aset_teregistrasi.cetak_penghapusan', compact('item'));
    }
}
