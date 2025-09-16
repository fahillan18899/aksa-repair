<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use App\Models\ChasBack;
use Illuminate\Http\Request;

class ChasBackController extends Controller
{

    public function index()
    {
        $item = ChasBack::all();
        return view('pages.akuntan.chas_back.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'marketing' => 'nullable',
            'instansi'  => 'nullable',
            'jumlah'    => 'nullable',
            'nominal'   => 'nullable',
        ]);

        ChasBack::create($validate);
        return redirect()->route('akuntan.data.chasBack')
        ->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $item = ChasBack::findOrFail($id);
        return view('pages.akuntan.chas_back.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'marketing' => 'nullable',
            'instansi'  => 'nullable',
            'jumlah'    => 'nullable',
            'nominal'   => 'nullable',
        ]);

        $item = ChasBack::findOrFail($id);
        $item->update($validate);
        return redirect()->route('akuntan.data.chasBack')
        ->with('success', 'data berhasil di ubah');
    }

    public function delete($id)
    {
        $item = ChasBack::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
