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
            'barang_jasa'       => 'nullable',
            'keterangan'        => 'nullable',
            'unit'              => 'nullable',
            'harga_satuan'      => 'nullable',
            'harga'             => 'nullable',
            'harga_tanpa_pajak' => 'nullable',
            'pajak'             => 'nullable',
            'total'             => 'nullable',
        ]);

        Invoice::create($validate);
        return redirect()->route('akuntan.data.invoicePermohonan')
        ->with('success', 'Invoice berhasil di simpan');
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
