<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GedungController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_gedung' => 'required',
            'nama_gedung' => 'required',
        ]);

        Gedung::create([
            'id_gedung' => $request->id_gedung,
            'nama_gedung' => $request->nama_gedung,
            'kode_rs' => Auth::user()->kode_rs,
        ]);

        return redirect('/dashboard/ppm/data_kelengkapan')->with('message', 'Data Gedung Berhasil di Tambahkan.');
    }

    public function edit($gedung)
    {
        $item = Gedung::where('id_gedung', $gedung)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.data_kelengkapan.update_gedung', compact('item'));
    }

    public function update(Request $request, Gedung $gedung)
    {
        $request->validate([
            'id_gedung' => '',
            'nama_gedung' => '',
        ]);

        $gedung->fill($request->post())->save();

        return redirect('/dashboard/ppm/data_kelengkapan')
            ->with('success', 'Data Gedung Berhasil di Ubah.');
    }

    public function destroy($id)
    {

        $item = Gedung::where('id_gedung', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Gedung Berhasil Di Hapus.');
    }
}
