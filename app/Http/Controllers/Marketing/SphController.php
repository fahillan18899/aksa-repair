<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Sph;
use App\Models\SphHistory;
use App\Models\SphOld;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SphController extends Controller
{
    public function index()
    {
        $users = Auth::user()->username;
        $item = Sph::where('user', $users)->get();
        $count = Sph::count() +1;
        $user = Auth::user()->rs_divisi;
        $part = Informasi::all();
        $noUrut = str_pad($count, 4, '0', STR_PAD_LEFT);
        $bulanAngka = \Carbon\Carbon::now()->format('n');
        $tahun = \Carbon\Carbon::now()->format('Y');
        $bulanRomawi = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V',
                        6 => 'VI', 7 => 'VII', 8 => 'VIII', 9 => 'IX', 10 => 'X',
                        11 => 'XI', 12 => 'XII'][$bulanAngka];
        return view('pages.marketing.sph.index',
        compact('item', 'noUrut', 'bulanRomawi', 'tahun', 'user', 'part'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'lokasi_tanggal'    => 'nullable',
            'no_surat'          => 'nullable',
            'hal'               => 'nullable',
            'yth'               => 'nullable',
            'akom'              => 'array',
            'akom.*.1'          => 'nullable',
            'akom.*.2'          => 'nullable',
            'akom.*.3'          => 'nullable',
            'akom.*.4'          => 'nullable',
            'akom.*.5'          => 'nullable',
            'akom.*.6'          => 'nullable',
            'akom.*.7'          => 'nullable',
            'akom.*.8'          => 'nullable',
            'akom.*.9'          => 'nullable',
            'akom.*.10'         => 'nullable',
            'akom.*.11'         => 'nullable',
            'akom.*.12'         => 'nullable',
            'akom.*.13'         => 'nullable',
            'part'              => 'array',
            'part.*.1'          => 'nullable',
            'part.*.2'          => 'nullable',
            'part.*.3'          => 'nullable',
            'part.*.4'          => 'nullable',
            'part.*.5'          => 'nullable',
            'part.*.6'          => 'nullable',
            'part.*.7'          => 'nullable',
            'part.*.8'          => 'nullable',
            'part.*.9'          => 'nullable',
            'part.*.10'         => 'nullable',
            'part.*.11'         => 'nullable',
            'part.*.12'         => 'nullable',
            'part.*.13'         => 'nullable',
            'part.*.14'         => 'nullable',
            'part.*.15'         => 'nullable',
            'part.*.16'         => 'nullable',
            'part.*.17'         => 'nullable',
            'part.*.18'         => 'nullable',
            'nama_alat'         => 'array',
            'nama_alat.*.1'     => 'nullable',
            'nama_alat.*.2'     => 'nullable',
            'nama_alat.*.3'     => 'nullable',
            'nama_alat.*.4'     => 'nullable',
            'keterangan'        => 'array',
            'keterangan.*.1'    => 'nullable',
            'keterangan.*.2'    => 'nullable',
            'keterangan.*.3'    => 'nullable',
            'keterangan.*.4'    => 'nullable',
            'keterangan.*.5'    => 'nullable',
            'jumlah'            => 'nullable',
            'harga'             => 'nullable',
            'diskon'            => 'nullable',
            'harga_diskon'      => 'nullable',
            'harga_tanpa_pajak' => 'nullable',
            'pajak'             => 'nullable',
            'total'             => 'nullable',
            'user'              => 'nullable',
        ]);

        $validate['akom'] = json_encode($request->akom);
        $validate['part'] = json_encode($request->part);
        $validate['nama_alat'] = json_encode($request->nama_alat);
        $validate['keterangan'] = json_encode($request->keterangan);
        Sph::create($validate);
        return redirect()->route('marketing.data.sph')
        ->with('success', 'Data berhasil di simpan');
    }

    public function edit($id)
    {
        $item = Sph::findOrFail($id);
        $part = Informasi::all();
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        return view('pages.marketing.sph.edit',
        compact('item', 'part'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'lokasi_tanggal'    => 'nullable',
            'no_surat'          => 'nullable',
            'hal'               => 'nullable',
            'yth'               => 'nullable',
            'akom'              => 'array',
            'akom.*.1'          => 'nullable',
            'akom.*.2'          => 'nullable',
            'akom.*.3'          => 'nullable',
            'akom.*.4'          => 'nullable',
            'akom.*.5'          => 'nullable',
            'akom.*.6'          => 'nullable',
            'akom.*.7'          => 'nullable',
            'akom.*.8'          => 'nullable',
            'akom.*.9'          => 'nullable',
            'akom.*.10'         => 'nullable',
            'akom.*.11'         => 'nullable',
            'akom.*.12'         => 'nullable',
            'akom.*.13'         => 'nullable',
            'part'              => 'array',
            'part.*.1'          => 'nullable',
            'part.*.2'          => 'nullable',
            'part.*.3'          => 'nullable',
            'part.*.4'          => 'nullable',
            'part.*.5'          => 'nullable',
            'part.*.6'          => 'nullable',
            'part.*.7'          => 'nullable',
            'part.*.8'          => 'nullable',
            'part.*.9'          => 'nullable',
            'part.*.10'         => 'nullable',
            'part.*.11'         => 'nullable',
            'part.*.12'         => 'nullable',
            'part.*.13'         => 'nullable',
            'part.*.14'         => 'nullable',
            'part.*.15'         => 'nullable',
            'part.*.16'         => 'nullable',
            'part.*.17'         => 'nullable',
            'part.*.18'         => 'nullable',
            'nama_alat'         => 'array',
            'nama_alat.*.1'     => 'nullable',
            'nama_alat.*.2'     => 'nullable',
            'nama_alat.*.3'     => 'nullable',
            'nama_alat.*.4'     => 'nullable',
            'keterangan'        => 'array',
            'keterangan.*.1'    => 'nullable',
            'keterangan.*.2'    => 'nullable',
            'keterangan.*.3'    => 'nullable',
            'keterangan.*.4'    => 'nullable',
            'keterangan.*.5'    => 'nullable',
            'jumlah'            => 'nullable',
            'harga'             => 'nullable',
            'diskon'            => 'nullable',
            'harga_diskon'      => 'nullable',
            'harga_tanpa_pajak' => 'nullable',
            'pajak'             => 'nullable',
            'total'             => 'nullable',
            'user'              => 'nullable',
        ]);

        $item = Sph::findOrFail($id);
        $user = Auth::user()->username;

        SphHistory::create([
            'lokasi_tanggal' => $item->lokasi_tanggal,
            'no_surat' => $item->no_surat,
            'hal' => $item->hal,
            'yth' => $item->yth,
            'akom' => $item->akom,
            'part' => $item->part,
            'nama_alat' => $item->nama_alat,
            'keterangan' => $item->keterangan,
            'jumlah' => $item->jumlah,
            'harga' => $item->harga,
            'diskon' => $item->diskon,
            'harga_diskon' => $item->harga_diskon,
            'harga_tanpa_pajak' => $item->harga_tanpa_pajak,
            'pajak' => $item->pajak,
            'total' => $item->total,
            'user' => $user,
        ]);

        $validate['akom'] = json_encode($request->akom);
        $validate['part'] = json_encode($request->part);
        $validate['nama_alat'] = json_encode($request->nama_alat);
        $validate['keterangan'] = json_encode($request->keterangan);
        $item->update($validate);
        return redirect()->route('marketing.data.sph')
        ->with('success', 'Sph berhasil di edit');
    }

    public function history()
    {
        $item = SphHistory::all();
        return view('pages.marketing.sph.history',
        compact('item'));
    }

    public function view($id)
    {
        $item = SphHistory::findOrFail($id);

        //Mengubah data menjadi array
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        return view('pages.marketing.sph.view',
        compact('item'));
    }

    public function print($id)
    {
        $data = Sph::findOrFail($id);

        // Mengubah data menjadi array
        $data->akom = is_string($data->akom) ? json_decode($data->akom, true) : $data->akom;
        $data->part = is_string($data->part) ? json_decode($data->part, true) : $data->part;
        $data->nama_alat = is_string($data->nama_alat) ? json_decode($data->nama_alat, true) : $data->nama_alat;
        $data->keterangan = is_string($data->keterangan) ? json_decode($data->keterangan, true) : $data->keterangan;
        return view('pages.marketing.sph.print',
        compact('data'));
    }

    public function part($nama)
    {
      $part = Informasi::where("nama", $nama)->get();
      return response()->json($part);
    }

    public function sphOld()
    {
        $item = \App\Models\SphOld::latest()->get();
        return view('pages.marketing.sph.sph_old',
        compact('item'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'sph' => 'required',
        ]);

        $file = $request->file('sph');
        $fileName = $file->getClientOriginalName();
        //Simpan ke storage/app/public/sph
        $path = $file->storeAs('public/documents/',$fileName);


        //Simpan nama di db
        $user = Auth::user()->username;
        SphOld::create([
            'nama' => $fileName,
            'path' => 'documents/'.$fileName,
            'users' => $user,
        ]);
        return back()->with('success', 'Document ('. $fileName . ') berhasil di upload');
    }

public function deleteDoc($id)
    {
        $item = SphOld::findOrFail($id);
        //Hapus File di storage
        if(Storage::exists('public/' . $item->path)){
            Storage::delete('public/' . $item->path);
        }
        //Hapus data di db
        $item->delete();

        return back()->with('success', 'Dokumen Berhasil dihapus');
    }

    public function delete($id)
    {
        $item = Sph::findOrFail($id);
        $item->delete();
        return redirect()->route('marketing.data.sph')
        ->with('success', 'Sph berhasil dihapus');
    }
}
