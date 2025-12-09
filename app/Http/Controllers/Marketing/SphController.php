<?php

namespace App\Http\Controllers\Marketing;

use App\Models\Sph;
use App\Models\SphOld;
use App\Models\Informasi;
use App\Models\SphHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
        $validate = $request->validate([
            'lokasi_tanggal'    => 'nullable',
            'no_surat'          => 'nullable',
            'hal'               => 'nullable',
            'yth'               => 'nullable',
            'part'              => 'array',
            'part.*.1'          => 'nullable',
            'part.*.2'          => 'nullable',
            'part.*.3'          => 'nullable',
            'harga_part'        => 'array',
            'harga_part.*.1'    => 'nullable',
            'harga_part.*.2'    => 'nullable',
            'harga_part.*.3'    => 'nullable',
            'jumlah_part'       => 'array',
            'jumlah_part.*.1'   => 'nullable',
            'jumlah_part.*.2'   => 'nullable',
            'jumlah_part.*.3'   => 'nullable',
            'total_part'        => 'nullable',
            'total_part.*.1'    => 'nullable',
            'total_part.*.2'    => 'nullable',
            'total_part.*.3'    => 'nullable',
            'biaya_part'        => 'nullable',
            'biaya_part.*.1'    => 'nullable',
            'biaya_part.*.2'    => 'nullable',
            'biaya_part.*.3'    => 'nullable',
            'part_total'        => 'array',
            'part_total.*.1'    => 'nullable',
            'part_total.*.2'    => 'nullable',
            'part_total.*.3'    => 'nullable',
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

        $validate['part'] = json_encode($request->part);
        $validate['harga_part'] = json_encode($request->harga_part);
        $validate['jumlah_part'] = json_encode($request->jumlah_part);
        $validate['total_part'] = json_encode($request->total_part);
        $validate['biaya_part'] = json_encode($request->biaya_part);
        $validate['part_total'] = json_encode($request->part_total);
        $validate['nama_alat'] = json_encode($request->nama_alat);
        $validate['keterangan'] = json_encode($request->keterangan);
        Sph::create($validate);
        return back()->with('success', 'Data berhasil di simpan');
    }

    public function edit($id)
    {
        $item = Sph::findOrFail($id);
        $part = Informasi::all();
        // Mengubah data menjadi array
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->harga_part = is_string($item->harga_part) ? json_decode($item->harga_part, true) : $item->harga_part;
        $item->jumlah_part = is_string($item->jumlah_part) ? json_decode($item->jumlah_part, true) : $item->jumlah_part;
        $item->total_part = is_string($item->total_part) ? json_decode($item->total_part, true) : $item->total_part;
        $item->biaya_part = is_string($item->biaya_part) ? json_decode($item->biaya_part, true) : $item->biaya_part;
        $item->part_total = is_string($item->part_total) ? json_decode($item->part_total, true) : $item->part_total;
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
            'part'              => 'array',
            'part.*.1'          => 'nullable',
            'part.*.2'          => 'nullable',
            'part.*.3'          => 'nullable',
            'harga_part'        => 'array',
            'harga_part.*.1'    => 'nullable',
            'harga_part.*.2'    => 'nullable',
            'harga_part.*.3'    => 'nullable',
            'jumlah_part'       => 'array',
            'jumlah_part.*.1'   => 'nullable',
            'jumlah_part.*.2'   => 'nullable',
            'jumlah_part.*.3'   => 'nullable',
            'total_part'        => 'nullable',
            'total_part.*.1'    => 'nullable',
            'total_part.*.2'    => 'nullable',
            'total_part.*.3'    => 'nullable',
            'biaya_part'        => 'nullable',
            'biaya_part.*.1'    => 'nullable',
            'biaya_part.*.2'    => 'nullable',
            'biaya_part.*.3'    => 'nullable',
            'part_total'        => 'array',
            'part_total.*.1'    => 'nullable',
            'part_total.*.2'    => 'nullable',
            'part_total.*.3'    => 'nullable',
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
            'part' => $item->part,
            'harga_part' => $item->harga_part,
            'jumlah_part' => $item->jumlah_part,
            'total_part' => $item->total_part,
            'biaya_part' => $item->biaya_part,
            'part_total' => $item->part_total,
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

        $validate['part'] = json_encode($request->part);
        $validate['harga_part'] = json_encode($request->harga_part);
        $validate['jumlah_part'] = json_encode($request->jumlah_part);
        $validate['total_part'] = json_encode($request->total_part);
        $validate['biaya_part'] = json_encode($request->biaya_part);
        $validate['part_total'] = json_encode($request->part_total);
        $validate['nama_alat'] = json_encode($request->nama_alat);
        $validate['keterangan'] = json_encode($request->keterangan);
        $item->update($validate);
        return redirect()->route('marketing.sph.index')
        ->with('success', 'Sph berhasil di edit');
    }

    public function show($id)
    {
        $data = Sph::findOrFail($id);

        // Mengubah data menjadi array
        $data->part = is_string($data->part) ? json_decode($data->part, true) : $data->part;
        $data->harga_part = is_string($data->harga_part) ? json_decode($data->harga_part, true) : $data->harga_part;
        $data->jumlah_part = is_string($data->jumlah_part) ? json_decode($data->jumlah_part, true) : $data->jumlah_part;
        $data->total_part = is_string($data->total_part) ? json_decode($data->total_part, true) : $data->total_part;
        $data->biaya_part = is_string($data->biaya_part) ? json_decode($data->biaya_part, true) : $data->biaya_part;
        $data->part_total = is_string($data->part_total) ? json_decode($data->part_total, true) : $data->part_total;
        $data->nama_alat = is_string($data->nama_alat) ? json_decode($data->nama_alat, true) : $data->nama_alat;
        $data->keterangan = is_string($data->keterangan) ? json_decode($data->keterangan, true) : $data->keterangan;
        return view('pages.marketing.sph.print',
        compact('data'));
    }

    public function destroy($id)
    {
        $item = Sph::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Sph berhasil dihapus');
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

        // Mengubah data menjadi array
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->harga_part = is_string($item->harga_part) ? json_decode($item->harga_part, true) : $item->harga_part;
        $item->jumlah_part = is_string($item->jumlah_part) ? json_decode($item->jumlah_part, true) : $item->jumlah_part;
        $item->total_part = is_string($item->total_part) ? json_decode($item->total_part, true) : $item->total_part;
        $item->biaya_part = is_string($item->biaya_part) ? json_decode($item->biaya_part, true) : $item->biaya_part;
        $item->part_total = is_string($item->part_total) ? json_decode($item->part_total, true) : $item->part_total;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        return view('pages.marketing.sph.view',
        compact('item'));
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
}
