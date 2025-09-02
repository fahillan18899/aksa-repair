<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vakture;
use App\Models\InvoiceOld;
use Illuminate\Http\Request;
use App\Models\InputCustomer;
use App\Http\Controllers\Controller;

class MonitoringAkuntanController extends Controller
{
    public function index8()
    {
        $data = InputCustomer::all();
        return view('pages.admin.monitoring_akuntan.data_customer',
        compact('data'));
    }

    public function viewInv($id)
    {
        $item = InputCustomer::findOrFail($id);
        // Mengubah data menjadi array
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) ?? [] : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) ?? [] : $item->part;
        $item->harga_part = is_string($item->harga_part) ? json_decode($item->harga_part, true) ?? [] : $item->harga_part;
        $item->jumlah_part = is_string($item->jumlah_part) ? json_decode($item->jumlah_part, true) ?? [] : $item->jumlah_part;
        $item->total_part = is_string($item->total_part) ? json_decode($item->total_part, true) ?? [] : $item->total_part;
        $item->biaya_part = is_string($item->biaya_part) ? json_decode($item->biaya_part, true) ?? [] : $item->biaya_part;
        $item->part_total = is_string($item->part_total) ? json_decode($item->part_total, true) ?? [] : $item->part_total;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) ?? [] : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) ?? [] : $item->keterangan; 
        return view('pages.admin.monitoring_akuntan.viewInv', 
        compact('item'));
    }

    public function invoDoc()
    {
        $item = InvoiceOld::all();
        return view('pages.admin.monitoring_akuntan.invo_doc',
        compact('item'));
    }

    public function getVakture()
    {
        $data = Vakture::all();
        return view('pages.admin.monitoring_akuntan.vakture',
        compact('data'));
    }
}
