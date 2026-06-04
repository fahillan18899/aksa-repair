<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use App\Models\Inv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InventarisController extends Controller
{
    public function index()
    {
        return view('pages.admin.PPM.inv.index', compact('items'));
    }

    public function create(Request $request)
    {
        $qr = $request->qr;
        $items = Inv::latest()->get();
        return view('pages.admin.PPM.inv.create', compact('qr', 'items'));
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
            'jadwal'    => 'required',
            'foto'      => 'required',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('alat', 'public');
        }

        Inv::create([
            'id_alat'   => $request->id_alat,
            'nama_alat' => $request->nama_alat,
            'merek'     => $request->merek,
            'type'      => $request->type,
            'seri'      => $request->seri,
            'lokasi'    => $request->lokasi,
            'jadwal'    => $request->jadwal,
            'foto'      => $fotoPath,
        ]);

        return back()->with('success', 'Data berhasil disimpan');
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

        return redirect()->route('inventaris.create')->with('success', 'Data berhasil diubah');
    }
}
