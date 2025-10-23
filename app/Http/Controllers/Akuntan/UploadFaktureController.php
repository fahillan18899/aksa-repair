<?php

namespace App\Http\Controllers\Akuntan;
use App\Models\Vakture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadFaktureController extends Controller
{
    public function index()
    {
        $item = \App\Models\Vakture::latest()->get();
        return view('pages.akuntan.upload_fakture.index',
        compact('item'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required',
        ]);

        $file = $request->file('document');
        $fileName = $file->getClientOriginalName();
        //Simpan ke storage/app/public/documents
        $path = $file->storeAs('public/documents/',$fileName);

        //Simpan nama di Db
        Vakture::create([
            'nama' =>$fileName,
            'path' => 'documents/'.$fileName,
        ]);
        return back()->with('success', 'Document ('. $fileName .') berhasil di upload');
    }

    public function destroy($id)
    {
        $item = Vakture::findOrFail($id);
        //Hapus File di storage
        if(Storage::exists('public/' . $item->path)){
            Storage::delete('public/' . $item->path);
        }
        //Hapus data di db
        $item->delete();
        return back()->with('success', 'Dokumen Berhasil dihapus');
    }
}
