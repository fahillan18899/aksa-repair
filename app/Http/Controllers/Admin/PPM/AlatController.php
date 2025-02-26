<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Alat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        session()->flash('success', 'Data Berhasil Disimpan');
        return redirect()->route('data_kelengkapan');
    }

    public function edit($id)
    {
        $kode_rs  = Auth::user()->kode_rs;
        $alats    = Alat::where('kode_rs', $kode_rs)->get();
        $item     = Alat::where('id_alat', $id)->where('kode_rs', $kode_rs)->first();
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
        session()->flash('success', 'Data berhasil disimpan');

        return redirect()->route('data_kelengkapan');
    }

    public function destroy($id)
    {
        $item = Alat::where('id_alat', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Alat Berhasil Dihapus.');
    }
}
