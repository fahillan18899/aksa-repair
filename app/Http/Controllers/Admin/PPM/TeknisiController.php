<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeknisiController extends Controller
{
    public function store(Request $request)
    {
    $data = $request->validate([
            'id_teknisi' => 'required',
            'nama_teknisi' => 'required',
        ]);

        Teknisi::create(array_merge($data, ['kode_rs' => auth()->user()->kode_rs]));
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Teknisi Berhasil Ditambahkan.');
    }

    public function edit($teknisi)
    {
        $item = Teknisi::where('id_teknisi', $teknisi)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.data_kelengkapan.update_teknisi',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
    $data = $request->validate([
            'id_teknisi' => '',
            'nama_teknisi' => '',
        ]);

        $teknisi = Teknisi::findOrFail($id);
        $teknisi->fill(array_merge($data))->save();
        
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Teknisi Berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = Teknisi::where('id_teknisi', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Teknisi Berhasil Dihapus.');
    }
}
