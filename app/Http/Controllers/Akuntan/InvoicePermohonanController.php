<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicePermohonanController extends Controller
{
    public function index()
    {
        $item = Invoice::all();
        return view('pages.akuntan.invoice_permohonan.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'yth'               => 'nullable',
            'tgl_invoice'       => 'nullable',
            'no_invoice'        => 'nullable',
            'no_pesanan'        => 'nullable',
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

    public function print($id)
    {
        $item = Invoice::findOrFail($id);
        return view('pages.akuntan.invoice_permohonan.print',
        compact('item'));
    }
}
