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
        $items = BeritaAcara::all();
        // perulangan array
        foreach ($items as $item) {
        if (is_string($item->rs)) {
            $item->rs = json_decode($item->rs, true);
        }
    }
        return view('pages.teknisi.ba.index',
        compact('items'));
    }

public function post(Request $request)
    {
        $validate = $request->validate([
            'ba'              => 'array',
            'ba.*.1'          => 'nullable',
            'ba.*.2'          => 'nullable',
            'ba.*.3'          => 'nullable',
            'ba.*.4'          => 'nullable',
            'rs'              => 'array',
            'rs.*.1'          => 'nullable',
            'rs.*.2'          => 'nullable',
            'rs.*.3'          => 'nullable',
            'rs.*.4'          => 'nullable',
            'rs.*.5'          => 'nullable',
            'kontak'          => 'array',
            'kontak.*.1'      => 'nullable',
            'kontak.*.2'      => 'nullable',
            'kontak.*.3'      => 'nullable',
            'kontak.*.4'      => 'nullable',
            'kontak.*.5'      => 'nullable',
            'alat'            => 'array',
            'alat.*.1'        => 'nullable',
            'alat.*.2'        => 'nullable',
            'alat.*.3'        => 'nullable',
            'alat.*.4'        => 'nullable',
            'alat.*.5'        => 'nullable',
            'alat.*.6'        => 'nullable',
            'alat.*.7'        => 'nullable',
            'jenis'           => 'array',
            'jenis.*.1'       => 'nullable',
            'jenis.*.2'       => 'nullable',
            'jenis.*.3'       => 'nullable',
            'jenis.*.4'       => 'nullable',
            'jenis.*.5'       => 'nullable',
            'jenis.*.6'       => 'nullable',
            'jenis.*.7'       => 'nullable',
            'jenis.*.8'       => 'nullable',
            'jenis.*.9'       => 'nullable',
            'skc'             => 'array',
            'skc.*.1'         => 'nullable',
            'skc.*.2'         => 'nullable',
            'keluhan'         => 'nullable',
            'aksi'            => 'nullable',
            'hasil'           => 'nullable',
            'pj'              => 'nullable',
            'teknisi'         => 'nullable',
            'tanggal_1'       => 'nullable',
            'tanggal_2'       => 'nullable',
        ]);

        $validate['ba'] = json_encode($request->ba);
        $validate['rs'] = json_encode($request->rs);
        $validate['kontak'] = json_encode($request->kontak);
        $validate['alat'] = json_encode($request->alat);
        $validate['jenis'] = json_encode($request->jenis);
        $validate['skc'] = json_encode($request->skc);
        BeritaAcara::create($validate);
        return redirect()->route('teknisi.data.ba')
        ->with('success', 'Data berhasil di simpan');
    }

    public function view($id)
    {
        $item = BeritaAcara::findOrFail($id);

        //Mengubah data menjadi array
        $item->ba = is_string($item->ba) ? json_decode($item->ba, true) : $item->ba;
        $item->rs = is_string($item->rs) ? json_decode($item->rs, true) : $item->rs;
        $item->kontak = is_string($item->kontak) ? json_decode($item->kontak, true) : $item->kontak;
        $item->alat = is_string($item->alat) ? json_decode($item->alat, true) : $item->alat;
        $item->jenis = is_string($item->jenis) ? json_decode($item->jenis, true) : $item->jenis;
        $item->skc = is_string($item->skc) ? json_decode($item->skc, true) : $item->skc;
        return view('pages.teknisi.ba.view',
        compact('item'));
    }

    public function edit($id)
    {
        $item = BeritaAcara::findOrFail($id);

        //Mengubah data menjadi array
        $item->ba = is_string($item->ba) ? json_decode($item->ba, true) : $item->ba;
        $item->rs = is_string($item->rs) ? json_decode($item->rs, true) : $item->rs;
        $item->kontak = is_string($item->kontak) ? json_decode($item->kontak, true) : $item->kontak;
        $item->alat = is_string($item->alat) ? json_decode($item->alat, true) : $item->alat;
        $item->jenis = is_string($item->jenis) ? json_decode($item->jenis, true) : $item->jenis;
        $item->skc = is_string($item->skc) ? json_decode($item->skc, true) : $item->skc;
        return view('pages.teknisi.ba.edit',
        compact('item'));
    }

    public function update( Request $request, $id)
    {
        $validate = $request->validate([
            'ba'              => 'array',
            'ba.*.1'          => 'nullable',
            'ba.*.2'          => 'nullable',
            'ba.*.3'          => 'nullable',
            'ba.*.4'          => 'nullable',
            'rs'              => 'array',
            'rs.*.1'          => 'nullable',
            'rs.*.2'          => 'nullable',
            'rs.*.3'          => 'nullable',
            'rs.*.4'          => 'nullable',
            'rs.*.5'          => 'nullable',
            'kontak'          => 'array',
            'kontak.*.1'      => 'nullable',
            'kontak.*.2'      => 'nullable',
            'kontak.*.3'      => 'nullable',
            'kontak.*.4'      => 'nullable',
            'kontak.*.5'      => 'nullable',
            'alat'            => 'array',
            'alat.*.1'        => 'nullable',
            'alat.*.2'        => 'nullable',
            'alat.*.3'        => 'nullable',
            'alat.*.4'        => 'nullable',
            'alat.*.5'        => 'nullable',
            'alat.*.6'        => 'nullable',
            'alat.*.7'        => 'nullable',
            'jenis'           => 'array',
            'jenis.*.1'       => 'nullable',
            'jenis.*.2'       => 'nullable',
            'jenis.*.3'       => 'nullable',
            'jenis.*.4'       => 'nullable',
            'jenis.*.5'       => 'nullable',
            'jenis.*.6'       => 'nullable',
            'jenis.*.7'       => 'nullable',
            'jenis.*.8'       => 'nullable',
            'jenis.*.9'       => 'nullable',
            'skc'             => 'array',
            'skc.*.1'         => 'nullable',
            'skc.*.2'         => 'nullable',
            'keluhan'         => 'nullable',
            'aksi'            => 'nullable',
            'hasil'           => 'nullable',
            'pj'              => 'nullable',
            'teknisi'         => 'nullable',
            'tanggal_1'       => 'nullable',
            'tanggal_2'       => 'nullable',
        ]);

        $validate['ba'] = json_encode($request->ba);
        $validate['rs'] = json_encode($request->rs);
        $validate['kontak'] = json_encode($request->kontak);
        $validate['alat'] = json_encode($request->alat);
        $validate['jenis'] = json_encode($request->jenis);
        $validate['skc'] = json_encode($request->skc);
        $item = BeritaAcara::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.data.ba')
        ->with('success', 'Data berhasil di ubah');
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
