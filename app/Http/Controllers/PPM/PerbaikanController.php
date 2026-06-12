<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inv;
use App\Models\Perbaikan;
use Illuminate\Support\Facades\Storage;

class PerbaikanController extends Controller
{
    public function create(Request $request)
    {
        $qr = $request->qr;
        $items = Perbaikan::where('id_alat', $qr)->get();
        $alat = Inv::where('id_alat', $qr)->firstOrFail();
        return view('pages.admin.PPM.perbaikan.create', compact('qr', 'alat','items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alat'   => 'required',
            'nama_alat' => 'required',
            'merek'     => 'required',
            'type'      => 'required',
            'seri'      => 'required',
            'lokasi'    => 'required',
            'kepala'    => 'required',
            'teknisi'   => 'required',
            'korektif'  => 'required',
            'catatan'   => 'required',
            'foto'      => 'required',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('alat', 'public');
        }

        Perbaikan::create([
            'id_alat'   => $request->id_alat,
            'nama_alat' => $request->nama_alat,
            'merek'     => $request->merek,
            'type'      => $request->type,
            'seri'      => $request->seri,
            'lokasi'    => $request->lokasi,
            'kepala'    => $request->kepala,
            'teknisi'   => $request->teknisi,
            'korektif'  => $request->korektif,
            'catatan'   => $request->catatan,
            'foto'      => $fotoPath,
        ]);

        session()->flash('success', 'Data Berhasil Tersimpan');
        return back();
    }

    public function edit($id)
    {
        $item = Perbaikan::findOrFail($id);
        return view('pages.admin.PPM.perbaikan.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_alat' => 'required',
            'merek'     => 'required',
            'type'      => 'required',
            'seri'      => 'required',
            'lokasi'    => 'required',
            'kepala'    => 'required',
            'teknisi'    => 'required',
            'korektif'    => 'required',
            'catatan'    => 'required',
        ]);

        $item = Perbaikan::findOrFail($id);
        $item->update($validate);
        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('ppm.perbaikan.create', ['qr' => $item->id_alat]);
    }

    public function destroy($id)
    {
        $item = Perbaikan::findOrFail($id);
        Storage::disk('public')->delete($item->foto);
        $item->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return back();
    }
}
