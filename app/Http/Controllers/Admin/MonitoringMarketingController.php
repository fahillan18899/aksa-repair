<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sph;
use App\Models\SphOld;
use App\Models\Invoice;
use App\Models\InvoiceOld;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use App\Models\InputPekerjaan;
use App\Http\Controllers\Controller;

class MonitoringMarketingController extends Controller
{
    public function getInputPekerjaan()
    {
        $data = InputPekerjaan::all();
        return view('pages.admin.monitoring_marketing.input_data',
        compact('data'));
    }

        public function edit($id)
    {
        $item = InputPekerjaan::findOrFail($id);
        return view('pages.admin.monitoring_marketing.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_alat' => 'nullable',
            'merek'     => 'nullable',
            'type'      => 'nullable',
            'no_seri'   => 'nullable',
            'instansi'  => 'nullable',
            'kerusakan' => 'nullable',
        ]);

        $item = InputPekerjaan::findOrFail($id);
        $item->update($validate);
        return redirect()->route('inputPekerjaan.data')
        ->with('success', 'Data berhasil di ubah');
    }

    public function getDataBarang()
    {
        $data = DataBarang::all();
        return view('pages.admin.monitoring_marketing.data_barang',
        compact('data'));
    }

    public function getSph()
    {
        $data = Sph::all();
        return view('pages.admin.monitoring_marketing.sph',
        compact('data'));
    }

    public function viewSph($id)
    {
        $item = Sph::findOrFail($id);
        // Mengubah data menjadi array
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->harga_part = is_string($item->harga_part) ? json_decode($item->harga_part, true) : $item->harga_part;
        $item->jumlah_part = is_string($item->jumlah_part) ? json_decode($item->jumlah_part, true) : $item->jumlah_part;
        $item->total_part = is_string($item->total_part) ? json_decode($item->total_part, true) : $item->total_part;
        $item->biaya_part = is_string($item->biaya_part) ? json_decode($item->biaya_part, true) : $item->biaya_part;
        $item->part_total = is_string($item->part_total) ? json_decode($item->part_total, true) : $item->part_total;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        return view('pages.admin.monitoring_marketing.viewSph',
        compact('item'));
    }

    public function sphDoc()
    {
        $item = SphOld::all();
        return view('pages.admin.monitoring_marketing.sph_doc',
        compact('item'));
    }

    public function getInvoice()
    {
        $data = Invoice::all();
        return view('pages.admin.monitoring_marketing.invoice',
        compact('data'));
    }

    public function viewInvo($id)
    {
        $item = Invoice::findOrFail($id);
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) ?? [] : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) ?? [] : $item->part;
        $item->harga_part = is_string($item->harga_part) ? json_decode($item->harga_part, true) ?? [] : $item->harga_part;
        $item->jumlah_part = is_string($item->jumlah_part) ? json_decode($item->jumlah_part, true) ?? [] : $item->jumlah_part;
        $item->total_part = is_string($item->total_part) ? json_decode($item->total_part, true) ?? [] : $item->total_part;
        $item->biaya_part = is_string($item->biaya_part) ? json_decode($item->biaya_part, true) ?? [] : $item->biaya_part;
        $item->part_total = is_string($item->part_total) ? json_decode($item->part_total, true) ?? [] : $item->part_total;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) ?? [] : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) ?? [] : $item->keterangan;
        return view('pages.admin.monitoring_marketing.viewInvo',
        compact('item'));
    }

    public function invoiceDoc()
    {
        $item = InvoiceOld::all();
        return view('pages.admin.monitoring_marketing.invoice_doc',
        compact('item'));
    }
}
