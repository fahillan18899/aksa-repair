<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlatController extends Controller
{
    public function store(Request $request)
    {
        
    $data =  $request->validate([
            'id_alat' => '',
            'nama_alat' => '',
            'kode_rs' => '',
        ]);

        Alat::create(array_merge($data, ['kode_rs' => auth()->user()->kode_rs]));
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Alat Berhasil Ditambahkan.');
    }

    public function edit($id)
    {
        $item = Alat::where('id_alat', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.data_kelengkapan.update_alat', 
        
        compact( 'item', 'alats',));
    }

    public function update(Request $request, $id)
    {
    $data =  $request->validate([
            'id_alat' => '',
            'nama_alat' => '',
        ]);

        $alat = Alat::findOrFail($id);
        $alat->fill(array_merge($data))->save();

        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Alat Berhasil di Ubah.');
    }

    public function destroy($id)
    {
        $item = Alat::where('id_alat', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Alat Berhasil Dihapus.');
    }
}
