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

        Gedung::create(array_merge($data, ['kode_rs' => auth()->user()->kode_rs]));
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Gedung Berhasil Ditambahkan.');
    }

    public function edit($gedung)
    {
        $item = Gedung::where('id_gedung', $gedung)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.data_kelengkapan.update_gedung',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
    $data =  $request->validate([
            'id_gedung' => '',
            'nama_gedung' => '',
        ]);

        $gedung = Gedung::findOrFail($id);
        $gedung->fill(array_merge($data))->save();

        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Gedung Berhasil diubah.');
    }

    public function destroy($id)
    {

        $item = Gedung::where('id_gedung', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Gedung Berhasil Dihapus.');
    }
}
