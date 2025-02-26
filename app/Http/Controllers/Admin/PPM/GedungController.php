<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Gedung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class GedungController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_gedung' => 'required',
            'nama_gedung' => 'required',
        ]);

        Gedung::create(array_merge($data, ['kode_rs' => auth()->user()->kode_rs]));
        session()->flash('success', 'Data Berhasil Disimpan');

        return redirect()->route('data_kelengkapan');
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
        session()->flash('success', 'Data berhasil disimpan');
        
        return redirect()->route('data_kelengkapan');
    }

    public function destroy($id)
    {

        $item = Gedung::where('id_gedung', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Gedung Berhasil Dihapus.');
    }
}
