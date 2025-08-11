<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Sph;
use Illuminate\Http\Request;

class InvoicePermohonanController extends Controller
{
    public function index()
    {
        $item = Invoice::all();
        $sph = Sph::all();
        return view('pages.akuntan.invoice_permohonan.index',
        compact('item', 'sph'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'yth'               => 'nullable',
            'tgl_invoice'       => 'nullable',
            'no_invoice'        => 'nullable',
            'no_pesanan'        => 'nullable',
            'alamat'            => 'nullable',
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
            
        ]);

        $validate['akom'] = json_encode($request->akom);
        $validate['part'] = json_encode($request->part);
        $validate['nama_alat'] = json_encode($request->nama_alat);
        $validate['keterangan'] = json_encode($request->keterangan);
        Invoice::create($validate);
        return redirect()->route('akuntan.data.invoicePermohonan')
        ->with('success', 'Invoice berhasil di simpan');
    }


    public function view($id)
    {
        $item = Sph::findOrFail($id);
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        
        return view('pages.akuntan.invoice_permohonan.view',
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
            'barang_jasa'       => 'nullable',
            'keterangan'        => 'nullable',
            'unit'              => 'nullable',
            'harga_satuan'      => 'nullable',
            'harga'             => 'nullable',
            'harga_tanpa_pajak' => 'nullable',
            'pajak'             => 'nullable',
            'total'             => 'nullable',
        ]);

        $item = Invoice::findOrFail($id);
        $item->update($validate);
        return redirect()->route('akuntan.data.invoicePermohonan')
        ->with('success', 'Invoice berhasil di ubah');
    }

    public function print($id)
    {
        $item = Invoice::findOrFail($id);
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) ?? [] : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) ?? [] : $item->part;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) ?? [] : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) ?? [] : $item->keterangan;
        // dd($item->nama_alat, $item->keterangan);
        return view('pages.akuntan.invoice_permohonan.print',
        compact('item'));
    }

    public function status($id)
    {
        $item = Invoice::findOrFail($id);
        $item->status = $item->status === '0' ? '1' : '0';
        $item->save();
        return back();

    }

public function fetch($id)
{
    $data = Sph::where('no_surat', $id)->first();
    if (!$data) {
        return response()->json(['error' => 'Data not found'], 404);
    }
    return response()->json($data);
}


    public function delete($id)
    {
        $item = Invoice::findOrFail($id);
        $item->delete();
        return redirect()->route('akuntan.data.invoicePermohonan')
        ->with('success', 'Invoice berhasil dihapus');
    }
}
