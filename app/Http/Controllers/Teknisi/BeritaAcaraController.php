<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeritaAcara;
use Illuminate\Support\Facades\Storage;

class BeritaAcaraController extends Controller
{
    public function index()
    {
        $data = \App\Models\BeritaAcara::latest()->get();
        return view('pages.teknisi.ba.index',
        compact('data'));
    }

    public function upload(Request $request)
    {
        $validate = $request->validate([

            'ba' => 'required',
        ]);

        $file = $request->file('ba');
        $fileName = $file->getClientOriginalName();
        //Simpan ke storege/app/public/ba
        $path = $file->storeAs('public/ba/',$fileName);

        //Simpan nama di db
        BeritaAcara::create([
            'instansi' =>$fileName,
            'path' => 'ba/'.$fileName,
        ]);
        return back()->with('success', 'Berita Acara ('. $fileName . ') berhasil di upload');
    }

    public function delete($id)
    {
        $item = BeritaAcara::findOrFail($id);
        //Hapus File di storage
        if(Storage::exists('public/' . $item->path)){
            Storage::delete('public/' . $item->path);
        }
        //Hapus data di db
        $item->delete();
        return back()->with('success', 'Berita acara berhasil di hapus');
    }
}
