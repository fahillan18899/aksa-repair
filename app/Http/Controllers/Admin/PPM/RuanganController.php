<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RuanganController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_ruangan' => '',
            'ruangan_alat' => 'required',
            'ruangan' => 'required',
            'kepala_ruangan' => 'required',
            'kode_rs' => '',
        ]);

        $lokasi_alat = $request->ruangan_alat . ',' . $request->ruangan;
        Ruangan::create([
            'id_ruangan' => $request->id_ruangan,
            'ruangan_alat' => $request->ruangan_alat,
            'ruangan' => $request->ruangan,
            'kepala_ruangan' => $request->kepala_ruangan,
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => Auth::user()->kode_rs,
        ]);

        return redirect('/dashboard/ppm/data_kelengkapan')
            ->with('success', 'Data Ruangan Berhasil di Tambahkan.');
    }

    public function edit($ruangan)
    {
        $item = Ruangan::where('id_ruangan', $ruangan)->where('kode_rs', Auth::user()->kode_rs)->first();
        $gedungs = Gedung::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.data_kelengkapan.update_ruangan', [
            'item' => $item,
            'teknisis' => $teknisis,
            'gedungs' => $gedungs,
        ]);
    }

    public function update(Request $request, Ruangan $ruangan)
    {
        $lokasi_alat = $request->ruangan_alat . ',' . $request->ruangan;
        $request->validate([
            'id_ruangan' => '',
            'ruangan_alat' => '',
            'ruangan' => '',
            'lokasi_alat' => $lokasi_alat,
        ]);

        $ruangan->fill($request->post())->save();

        return redirect('/dashboard/ppm/data_kelengkapan')
            ->with('success', 'Data Berhasil Ubah.');
    }

    public function destroy($id)
    {
        $item = Ruangan::where('id_ruangan', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Ruangan Berhasil Di Hapus.');
    }
}
