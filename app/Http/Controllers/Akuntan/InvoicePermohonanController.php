<?php

namespace App\Http\Controllers\Akuntan;

use Carbon\Carbon;
use App\Models\Sph;
use App\Models\Rekap;
use App\Models\Invoice;
use App\Models\InvoiceOld;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InvoicePermohonanController extends Controller
{
    public function index()
    {
        $item = Invoice::all();
        $sph = Sph::all();
        return view('pages.akuntan.invoice_permohonan.index',
        compact('item', 'sph'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'yth'               => 'nullable',
            'tgl_invoice'       => 'nullable',
            'no_invoice'        => 'nullable',
            'no_pesanan'        => 'nullable',
            'alamat'            => 'nullable',
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
        Sph::where('no_surat', $request->no_pesanan)->update(['status' => 1]);
        Invoice::create($validate);
        return redirect()->route('akuntan.invoice.index')
        ->with('success', 'Invoice berhasil di buat');
    }

    public function show($id)
    {
        $item = Invoice::findOrFail($id);
        $item->part = is_string($item->part) ? json_decode($item->part, true) ?? [] : $item->part;
        $item->harga_part = is_string($item->harga_part) ? json_decode($item->harga_part, true) ?? [] : $item->harga_part;
        $item->jumlah_part = is_string($item->jumlah_part) ? json_decode($item->jumlah_part, true) ?? [] : $item->jumlah_part;
        $item->total_part = is_string($item->total_part) ? json_decode($item->total_part, true) ?? [] : $item->total_part;
        $item->biaya_part = is_string($item->biaya_part) ? json_decode($item->biaya_part, true) ?? [] : $item->biaya_part;
        $item->part_total = is_string($item->part_total) ? json_decode($item->part_total, true) ?? [] : $item->part_total;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) ?? [] : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) ?? [] : $item->keterangan;
        // dd($item->nama_alat, $item->keterangan);
        return view('pages.akuntan.invoice_permohonan.print',
        compact('item'));
    }

    public function edit($id)
    {
        $item = Invoice::findOrFail($id);
        return view('pages.akuntan.invoice_permohonan.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'yth'               => 'nullable',
            'tgl_invoice'       => 'nullable',
            'no_invoice'        => 'nullable',
            'no_pesanan'        => 'nullable',
            'alamat'            => 'nullable',
        ]);

        $item = Invoice::findOrFail($id);
        $item->update($validate);
        return redirect()->route('akuntan.invoice.index')
        ->with('success', 'Invoice berhasil di ubah');
    }

    public function destroy($id)
    {
        $item = Invoice::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Invoice berhasil dihapus');
    }

    public function view($id)
    {
        $item = Sph::findOrFail($id);
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->harga_part = is_string($item->harga_part) ? json_decode($item->harga_part, true) : $item->harga_part;
        $item->jumlah_part = is_string($item->jumlah_part) ? json_decode($item->jumlah_part, true) : $item->jumlah_part;
        $item->total_part = is_string($item->total_part) ? json_decode($item->total_part, true) : $item->total_part;
        $item->biaya_part = is_string($item->biaya_part) ? json_decode($item->biaya_part, true) : $item->biaya_part;
        $item->part_total = is_string($item->part_total) ? json_decode($item->part_total, true) : $item->part_total;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        
        //No Invoice
        $count = Invoice::count() +1;
        $noUrut = str_pad($count, 4, '0', STR_PAD_LEFT);
        $bulanAngka = \Carbon\Carbon::now()->format('n');
        $tahun = \Carbon\Carbon::now()->format('Y');
        $bulanRomawi = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V',
                        6 => 'VI', 7 => 'VII', 8 => 'VIII', 9 => 'IX', 10 => 'X',
                        11 => 'XI', 12 => 'XII'][$bulanAngka];
        return view('pages.akuntan.invoice_permohonan.view',
        compact('item', 'noUrut', 'bulanRomawi', 'tahun',));
    }

    public function status($id)
    {
        $item = Invoice::findOrFail($id);
        $item->status = $item->status === '0' ? '1' : '0';
        $item->save();

        if($item->status == '0'){
        //cek data agar tidak double
        $exists = Rekap::where('invoice', $item->no_invoice)->exists();
        if(!$exists) {
            $akom = json_decode($item->akom, true);
            $part = json_decode($item->part_total, true);
            Rekap::create([
                'tanggal' => Carbon::now()->toDateString(),
                'marketing' => $item->user,
                'instansi' => $item->yth,
                'sperpart' => $part[1] ?? '-',
                'sph' => $item->no_pesanan,
                'invoice' => $item->no_invoice,
                'nominal' => $item->total,
                'ppn' => $item->pajak,
                'pph3' => 0,
                'admin' => '-',
                'status' => 'Lunas',
                'keuntungan' => '-',
                'ket' => '-',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        }
        return back()->with('success', 'Status invoice berhasil diperbarui!');
    }

    public function fetch($id)
    {
        $data = Sph::where('no_surat', $id)->first();
        if (!$data) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($data);
    }

    public function invoiceOld()
    {
        $item = \App\Models\InvoiceOld::latest()->get();
        return view('pages.akuntan.invoice_permohonan.invoice_old',
        compact('item'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'invoice' => 'required',
        ]);

        $file = $request->file('invoice');
        $fileName = $file->getClientOriginalName();
        //Simpan ke storage/app/public/sph
        $path = $file->storeAs('public/documents/',$fileName);

        //Simpan nama di db
        InvoiceOld::create([
            'nama' => $fileName,
            'path' => 'documents/'.$fileName,
        ]);
        return back()->with('success', 'Document ('. $fileName . ') berhasil di upload');
    }

    public function deleteDoc($id)
    {
        $item = InvoiceOld::findOrFail($id);
        //Hapus File di storage
        if(Storage::exists('public/' . $item->path)){
            Storage::delete('public/' . $item->path);
        }
        //Hapus data di db
        $item->delete();
        return back()->with('success', 'Dokumen Berhasil dihapus');
    }
}
