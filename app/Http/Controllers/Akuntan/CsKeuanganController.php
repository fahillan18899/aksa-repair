<?php

namespace App\Http\Controllers\Akuntan;

use App\Models\CsKeuangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CsKeuanganController extends Controller
{
    public function index()
    {
        $item = CsKeuangan::all();
        return view('pages.akuntan.cs_keuangan.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'instansi'    => 'nullable',
            'jumlah'      => 'nullable',
            'wilayah'     => 'nullable',
            'marketing'   => 'nullable',
            'ba'          => 'nullable',
        ]);

        // Upload dokument
        if($request->hasFile('ba')){
            $file = $request->file('ba');
            $fileName = $file->getClientOriginalName();
            //Simpan ke storage/app/foto
            $path = $file->storeAs('public/ba/',$fileName);
            $validate['ba'] = 'ba/'.$fileName;
        } 
        else { $validate['ba'] = null; }

        CsKeuangan::create($validate);
        return redirect()->route('akuntan.data.CsKeuangan')
        ->with('success', 'Invoice berhasil di simpan');
    }

    public function edit($id)
    {
        $item = CsKeuangan::findOrFail($id);
        return view('pages.akuntan.cs_keuangan.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'instansi'    => 'nullable',
            'jumlah'      => 'nullable',
            'wilayah'     => 'nullable',
            'marketing'   => 'nullable',
            'ba'          => 'nullable',
        ]);

        // Upload dokument
        if($request->hasFile('ba')){
            $file = $request->file('ba');
            $fileName = $file->getClientOriginalName();
            //Simpan ke storage/app/foto
            $path = $file->storeAs('public/ba/',$fileName);
            $validate['ba'] = 'ba/'.$fileName;
        } 
        else { $validate['ba'] = null; }

        $item = CsKeuangan::findOrFail($id);
        $item->update($validate);
        return redirect()->route('akuntan.data.CsKeuangan')
        ->with('success', 'Invoice berhasil di ubah');
    }

    public function delete($id)
    {
        $item = CsKeuangan::findOrFail($id);
        //Hapus file di storage
        if(Storage::exists('public/' . $item->ba)){
            Storage::delete('public/' . $item->ba);
        }
        $item->delete();
        return redirect()->route('akuntan.data.CsKeuangan')
        ->with('success', 'Data berhasil dihapus');
    }
}
