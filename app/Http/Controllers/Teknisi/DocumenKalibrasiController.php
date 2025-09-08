<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DocumnetKalibrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumenKalibrasiController extends Controller
{
    public function index()
    {
        $item = DocumnetKalibrasi::all();
        return view('pages.teknisi.informasi.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'instansi'  => 'nullable',
            'marketing' => 'nullable',
            'jumlah'    => 'nullable',
            'document'  => 'nullable',
        ]);

         // Upload dokument
        if($request->hasFile('document')){
            $file = $request->file('document');
            $fileName = $file->getClientOriginalName();
            //Simpan ke storage/app/foto
            $path = $file->storeAs('public/document/',$fileName);
            $validate['document'] = 'document/'.$fileName;
        } 
        else { $validate['document'] = null; }

        DocumnetKalibrasi::create($validate);
        return redirect()->route('teknisi.data.dokumen')
        ->with('success', 'Dokumen berhasil disimpan');
    }

    public function edit($id)
    {
        $item = DocumnetKalibrasi::findOrFail($id);
        return view('pages.teknisi.informasi.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'instansi'  => 'nullable',
            'marketing' => 'nullable',
            'jumlah'    => 'nullable',
            'document'  => 'nullable',
        ]);

         // Upload dokument
        if($request->hasFile('document')){
            $file = $request->file('document');
            $fileName = $file->getClientOriginalName();
            //Simpan ke storage/app/foto
            $path = $file->storeAs('public/document/',$fileName);
            $validate['document'] = 'document/'.$fileName;
        } 
        else { $validate['document'] = null; }

        $item = DocumnetKalibrasi::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.data.dokumen')
        ->with('success', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $item = DocumnetKalibrasi::findOrFail($id);
        //Hapus file di storage
        if(Storage::exists('public/' . $item->document)){
            Storage::delete('public/' . $item->document);
        }
        $item->delete();
        return redirect()->route('teknisi.data.dokumen')
        ->with('success', 'Data berhasil dihapus');
    }
}
