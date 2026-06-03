<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use App\Models\Inv;
use Illuminate\Http\Request;

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
            $foto = $request->file('foto');
            $namaFoto = time() . '_' . $foto->getClientOriginalName();
            $foto->move(
                public_path('uploads/alat'),
                $namaFoto
            );
            $fotoPath = 'uploads/alat/' . $namaFoto;
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
}
