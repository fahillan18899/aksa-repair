<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $item = Informasi::all();
        return view('pages.teknisi.informasi.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'nama'    => 'nullable',
            'merek'   => 'nullable',
            'type'    => 'nullable',
            'no_seri' => 'nullable',
        ]);

        Informasi::create($validate);
        return redirect()->route('teknisi.data.informasi')
        ->with('success', 'Sperpart berhasil disimpan');
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
        ]);

        $item = Informasi::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.data.informasi')
        ->with('success', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $item = Informasi::findOrFail($id);
        $item->delete();
        return redirect()->route('teknisi.data.informasi')
        ->with('success', 'Sperpart berhasil dihapus');
    }
}
