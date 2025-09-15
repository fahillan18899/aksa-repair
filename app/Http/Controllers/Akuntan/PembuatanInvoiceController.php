<?php

namespace App\Http\Controllers\Akuntan;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembuatanInvoiceController extends Controller
{
    public function index()
    {
        $item = Invoice::all();
        return view('pages.akuntan.pembuatan_invoice.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'marketing' => 'nullable',
            'instansi'  => 'nullable',
            'jumlah'    => 'nullable',
            'harga'     => 'nullable',
        ]);

        Invoice::create($validate);
        return redirect()->route('akuntan.data.pembuatanInvo')
        ->with('success', 'Invoice berhasil di simpan');
    }
    
    public function edit($id)
    {
        $item = Invoice::findOrFail($id);
        return view('pages.akuntan.pembuatan_invoice.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'marketing' => 'nullable',
            'instansi'  => 'nullable',
            'jumlah'    => 'nullable',
            'harga'     => 'nullable',
        ]);

        $item = Invoice::findOrFail($id);
        $item->update($validate);
        return redirect()->route('akuntan.data.pembuatanInvo')
        ->with('success', 'Invoice berhasil di ubah');
    }

    public function delete($id)
    {
        $item = Invoice::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Data Berhasil dihapus');
    }
}
