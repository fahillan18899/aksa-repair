<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LembarPemeliharaan;

class LembarPemeliharaanController extends Controller
{

    public function index()
    {
        $lembarPemeliharaans = LembarPemeliharaan::all();
        return view('pages.admin.ppm.lembar_pemeliharaan.index', compact('lembarPemeliharaans'));
    }

    public function create()
    {
        return view('lembar_pemeliharaans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ppm' => 'required|unique:lembar_pemeliharaans,id_ppm',
            'tanggal' => 'required|date',
            'kegiatan' => 'required|string',
        ]);

        LembarPemeliharaan::create($request->all());

        return redirect()->route('lembar-pemeliharaan.index')
        ->with('success', 'Lembar Pemeliharaan berhasil disimpan.');
    }

    public function show($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        return view('pages.admin.ppm.lembar_pemeliharaan.index', compact('lembarPemeliharaan'));
    }

    public function edit($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        return view('pages.admin.ppm.lembar_pemeliharaan.index', compact('lembarPemeliharaan'));
    }

    public function update(Request $request, $id_ppm)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kegiatan' => 'required|string',
        ]);

        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        $lembarPemeliharaan->update($request->all());

        return redirect()->route('lembar-pemeliharaan.index')
        ->with('success', 'Lembar Pemeliharaan berhasil diperbarui.');
    }

    public function destroy($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        $lembarPemeliharaan->delete();

        return redirect()->route('lembar-pemeliharaan.index')
        ->with('success', 'Lembar Pemeliharaan berhasil dihapus.');
    }
}
