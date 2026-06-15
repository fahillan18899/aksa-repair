<?php

namespace App\Http\Controllers\PPM;

use App\Models\Inv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InventarisController extends Controller
{

    public function create(Request $request)
    {
        $qr = $request->qr;
        $rs = Auth::user()->rs;
        $items = Inv::where('rs', $rs)->get();
        return view('pages.admin.PPM.inv.create', compact('qr', 'items', 'rs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rs'   => 'required',
            'id_alat'   => 'required',
            'nama_alat' => 'required',
            'merek'     => 'required',
            'type'      => 'required',
            'seri'      => 'required',
            'lokasi'    => 'required',
            'jadwal'    => 'required',
            'foto'      => 'required',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('alat', 'public');
        }

        Inv::create([
            'rs'        => $request->rs,
            'id_alat'   => $request->id_alat,
            'nama_alat' => $request->nama_alat,
            'merek'     => $request->merek,
            'type'      => $request->type,
            'seri'      => $request->seri,
            'lokasi'    => $request->lokasi,
            'jadwal'    => $request->jadwal,
            'foto'      => $fotoPath,
        ]);

        session()->flash('success', 'Data Berhasil Tersimpan');
        return back();
    }

    public function edit($id)
    {
        $item = Inv::findOrFail($id);
        return view('pages.admin.PPM.inv.edit',
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
            'jadwal'    => 'required',
        ]);

        $item = Inv::findOrFail($id);
        $item->update($validate);
        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('ppm.inventaris.create', ['qr' => $item->id_alat]);
    }

    public function destroy($id)
    {
        $item = Inv::findOrFail($id);
        Storage::disk('public')->delete($item->foto);
        $item->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return back();
    }
}
