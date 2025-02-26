<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RuanganController extends Controller
{
    public function store(Request $request)
    {   
    $validated = $request->validate([
            'id_ruangan'     => 'required',
            'ruangan_alat'   => 'required',
            'ruangan'        => 'required',
            'kepala_ruangan' => 'required',
        ]);

        Ruangan::create($validated + [
            'lokasi_alat' => $validated['ruangan_alat'],
            'kode_rs'     => auth()->user()->kode_rs
        ]);
        session()->flash('success', 'Data Berhasil Disimpan');
        return redirect()->route('data_kelengkapan');
    }

    public function edit($ruangan)
    {
        $item = Ruangan::where('kode_rs', auth()->user()->kode_rs)
                       ->where('id_ruangan', $ruangan)->firstOrFail();
        $gedungs = Gedung::where('kode_rs', auth()->user()->kode_rs)->get();
       
        return view('pages.admin.PPM.data_kelengkapan.update_ruangan',
        compact('item', 'gedungs'));
    }

    public function update(Request $request, $id)
    {
       $validated = $request->validate([
        'id_ruangan'     => 'required',
        'ruangan_alat'   => 'required',
        'ruangan'        => 'required',
        'kepala_ruangan' => 'required',
       ]);

       $ruangan = Ruangan::where('kode_rs', auth()->user()->kode_rs)
                         ->where('id_ruangan', $id)->firstOrFail();

       $ruangan->update($validated + [
        'lokasi_alat' => $validated['ruangan_alat'],
        'kode_rs'     => auth()->user()->kode_rs,
       ]);
       session()->flash('success', 'Data Berhasil Disimpan');
       return redirect()->route('data_kelengkapan');
    }

    public function destroy($id)
    {
        $item = Ruangan::where('id_ruangan', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect()->route('data_kelengkapan')->with('success', 'Data Ruangan Berhasil Di Hapus.');
    }
}
