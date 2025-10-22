<?php

namespace App\Http\Controllers\Teknisi;

use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    public function index()
    {
        $item = Informasi::all();
        return view('pages.teknisi.informasi.index',
        compact('item'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama'    => 'nullable',
            'merek'   => 'nullable',
            'type'    => 'nullable',
            'no_seri' => 'nullable',
            'harga'   => 'nullable',
            'toko'    => 'nullable',
        ]);

        Informasi::create($validate);
        return back()->with('success', 'Sperpart berhasil disimpan');
    }

    public function edit($id)
    {
        $item = Informasi::findOrFail($id);
        return view('pages.teknisi.informasi.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama'    => 'nullable',
            'merek'   => 'nullable',
            'type'    => 'nullable',
            'no_seri' => 'nullable',
            'harga'   => 'nullable',
            'toko'    => 'nullable',
        ]);

        $item = Informasi::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.informasi.index')
        ->with('success', 'Data berhasil di update');
    }

    public function destroy($id)
    {
        $item = Informasi::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Sperpart berhasil dihapus');
    }
}
