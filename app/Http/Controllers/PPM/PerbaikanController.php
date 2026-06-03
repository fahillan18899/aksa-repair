<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inv;
use App\Models\Perbaikan;

class PerbaikanController extends Controller
{
    public function create(Request $request)
    {
        $qr = $request->qr;
        $items = Perbaikan::latest()->get();
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

        return back()->with('success', 'Data berhasil disimpan');
    }
}
