<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\SuratTerima;
use Illuminate\Http\Request;

class SuratTerimaController extends Controller
{
    public function index()
    {
        $item = SuratTerima::all();
        return view('pages.teknisi.surat_terima.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'nama_1'    => 'nullable',
            'jabatan_1' => 'nullable',
            'bagian_1'  => 'nullable',
            'kontak_1'  => 'nullable',
            'nama_2'    => 'nullable',
            'jabatan_2' => 'nullable',
            'bagian_2'  => 'nullable',
            'kontak_2'  => 'nullable',
            //ARRAY
            'nama_alat' => 'array',
            'nama_alat.*.1' => 'nullable',
            'nama_alat.*.2' => 'nullable',
            'nama_alat.*.3' => 'nullable',
            'nama_alat.*.4' => 'nullable',
            'nama_alat.*.5' => 'nullable',
            'merek_type' => 'array',
            'merek_type.*.1' => 'nullable',
            'merek_type.*.2' => 'nullable',
            'merek_type.*.3' => 'nullable',
            'merek_type.*.4' => 'nullable',
            'merek_type.*.5' => 'nullable',
            'no_seri' => 'array',
            'no_seri.*.1' => 'nullable',
            'no_seri.*.2' => 'nullable',
            'no_seri.*.3' => 'nullable',
            'no_seri.*.4' => 'nullable',
            'no_seri.*.5' => 'nullable',
            'kondisi' => 'array',
            'kondisi.*.1' => 'nullable',
            'kondisi.*.2' => 'nullable',
            'kondisi.*.3' => 'nullable',
            'kondisi.*.4' => 'nullable',
            'kondisi.*.5' => 'nullable',
            'kelengkapan' => 'array',
            'kelengkapan.*.1' => 'nullable',
            'kelengkapan.*.2' => 'nullable',
            'kelengkapan.*.3' => 'nullable',
            'kelengkapan.*.4' => 'nullable',
            'kelengkapan.*.5' => 'nullable',
            'jumlah' => 'array',
            'jumlah.*.1' => 'nullable',
            'jumlah.*.2' => 'nullable',
            'jumlah.*.3' => 'nullable',
            'jumlah.*.4' => 'nullable',
            'jumlah.*.5' => 'nullable',
            'keterangan' => 'array',
            'keterangan.*.1' => 'nullable',
            'keterangan.*.2' => 'nullable',
            'keterangan.*.3' => 'nullable',
            'keterangan.*.4' => 'nullable',
            'keterangan.*.5' => 'nullable',
        ]);

        $validate['nama_alat'] = json_encode($request->nama_alat);
        $validate['merek_type'] = json_encode($request->merek_type);
        $validate['no_seri'] = json_encode($request->no_seri);
        $validate['kondisi'] = json_encode($request->kondisi);
        $validate['kelengkapan'] = json_encode($request->kelengkapan);
        $validate['jumlah'] = json_encode($request->jumlah);
        $validate['keterangan'] = json_encode($request->keterangan);
        $item = SuratTerima::create($validate);
        $item->save();
        return redirect()->route('teknisi.data.suratTerima')->
        with('success', 'Data berhasil di simpan');
    }

    public function view($id)
    {
        $item = SuratTerima::findOrFail($id);

        //Mengubah data menjadi array
        $item->jumlah = is_string($item->jumlah) ? json_decode($item->jumlah, true) : $item->jumlah;
        $item->no_seri = is_string($item->no_seri) ? json_decode($item->no_seri, true) : $item->no_seri;
        $item->kondisi = is_string($item->kondisi) ? json_decode($item->kondisi, true) : $item->kondisi;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->merek_type = is_string($item->merek_type) ? json_decode($item->merek_type, true) : $item->merek_type;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        $item->kelengkapan = is_string($item->kelengkapan) ? json_decode($item->kelengkapan, true) : $item->kelengkapan;
        
        return view('pages.teknisi.surat_terima.view',
        compact('item'));
    }

        public function edit($id)
    {
        $item = SuratTerima::findOrFail($id);
        $item->jumlah = is_string($item->jumlah) ? json_decode($item->jumlah, true) : $item->jumlah;
        $item->no_seri = is_string($item->no_seri) ? json_decode($item->no_seri, true) : $item->no_seri;
        $item->kondisi = is_string($item->kondisi) ? json_decode($item->kondisi, true) : $item->kondisi;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->merek_type = is_string($item->merek_type) ? json_decode($item->merek_type, true) : $item->merek_type;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        $item->kelengkapan = is_string($item->kelengkapan) ? json_decode($item->kelengkapan, true) : $item->kelengkapan;
        return view('pages.teknisi.surat_terima.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_1' => 'nullable',
            'jabatan_1' => 'nullable',
            'bagian_1' => 'nullable',
            'kontak_1' => 'nullable',
            'nama_2' => 'nullable',
            'jabatan_2' => 'nullable',
            'bagian_2' => 'nullable',
            'kontak_2' => 'nullable',
            //ARRAY
            'nama_alat' => 'array',
            'nama_alat.*.1' => 'nullable',
            'nama_alat.*.2' => 'nullable',
            'nama_alat.*.3' => 'nullable',
            'nama_alat.*.4' => 'nullable',
            'nama_alat.*.5' => 'nullable',
            'merek_type' => 'array',
            'merek_type.*.1' => 'nullable',
            'merek_type.*.2' => 'nullable',
            'merek_type.*.3' => 'nullable',
            'merek_type.*.4' => 'nullable',
            'merek_type.*.5' => 'nullable',
            'no_seri' => 'array',
            'no_seri.*.1' => 'nullable',
            'no_seri.*.2' => 'nullable',
            'no_seri.*.3' => 'nullable',
            'no_seri.*.4' => 'nullable',
            'no_seri.*.5' => 'nullable',
            'kondisi' => 'array',
            'kondisi.*.1' => 'nullable',
            'kondisi.*.2' => 'nullable',
            'kondisi.*.3' => 'nullable',
            'kondisi.*.4' => 'nullable',
            'kondisi.*.5' => 'nullable',
            'kelengkapan' => 'array',
            'kelengkapan.*.1' => 'nullable',
            'kelengkapan.*.2' => 'nullable',
            'kelengkapan.*.3' => 'nullable',
            'kelengkapan.*.4' => 'nullable',
            'kelengkapan.*.5' => 'nullable',
            'jumlah' => 'array',
            'jumlah.*.1' => 'nullable',
            'jumlah.*.2' => 'nullable',
            'jumlah.*.3' => 'nullable',
            'jumlah.*.4' => 'nullable',
            'jumlah.*.5' => 'nullable',
            'keterangan' => 'array',
            'keterangan.*.1' => 'nullable',
            'keterangan.*.2' => 'nullable',
            'keterangan.*.3' => 'nullable',
            'keterangan.*.4' => 'nullable',
            'keterangan.*.5' => 'nullable',
        ]);

        $item = SuratTerima::findOrFail($id);
        $validate['nama_alat'] = json_encode($request->nama_alat);
        $validate['merek_type'] = json_encode($request->merek_type);
        $validate['no_seri'] = json_encode($request->no_seri);
        $validate['kondisi'] = json_encode($request->kondisi);
        $validate['kelengkapan'] = json_encode($request->kelengkapan);
        $validate['jumlah'] = json_encode($request->jumlah);
        $validate['keterangan'] = json_encode($request->keterangan);
        $item->update($validate);
        return redirect()->route('teknisi.data.suratTerima')
        ->with('success', 'Surat Serah Terima berhasil di edit');
    }

        public function delete($id)
    {
        $item = SuratTerima::findOrFail($id);
        $item->delete();
        return redirect()->route('teknisi.data.suratTerima')
        ->with('success', 'Serah Terima berhasil dihapus');
    }
}
