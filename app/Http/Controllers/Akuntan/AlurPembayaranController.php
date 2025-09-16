<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class AlurPembayaranController extends Controller
{
    public function index()
    {
        $item = Pembayaran::all();
        return view('pages.akuntan.alur_pembayaran.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'marketing' => 'nullable',
            'instansi'  => 'nullable',
            'jumlah'    => 'nullable',
            'nominal'   => 'nullable',
            'document'  => 'nullable',
            'tanggal'   => 'nullable',
            'sistem'    => 'nullable'
        ]);

        // Upload dokument
        if($request->hasFile('document')){
            $file = $request->file('document');
            $fileName = $file->getClientOriginalName();
            //Simpan ke storage/app/dokument
            $path = $file->storeAs('public/document/',$fileName);
            $validate['document'] = 'document/'.$fileName;
        } 
        else { $validate['document'] = null; }

        Pembayaran::create($validate);
        return redirect()->route('akuntan.data.alurPembayaran')
        ->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $item = Pembayaran::findOrFail($id);
        return view('pages.akuntan.alur_pembayaran.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'marketing' => 'nullable',
            'instansi'  => 'nullable',
            'jumlah'    => 'nullable',
            'nominal'   => 'nullable',
            'document'  => 'nullable',
            'tanggal'   => 'nullable',
            'sistem'    => 'nullable',
        ]);

        // Upload dokument
        if($request->hasFile('document')){
            $file = $request->file('document');
            $fileName = $file->getClientOriginalName();
            //Simpan ke storage/app/document
            $path = $file->storeAs('public/document/',$fileName);
            $validate['document'] = 'document/'.$fileName;
        } 
        else { $validate['document'] = null; }

        $item = Pembayaran::findOrFail($id);
        $item->update($validate);
        return redirect()->route('akuntan.data.alurPembayaran')
        ->with('success', 'data berhasil di ubah');
    }

    public function delete($id)
    {
        $item = Pembayaran::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
