<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Vakture;
use Illuminate\Http\Request;

class MonitoringAkuntanController extends Controller
{
    public function getInvoiceAkun()
    {
        $data = Invoice::all();
        return view('pages.admin.monitoring_akuntan.invoice_akun',
        compact('data'));
    }

    public function viewInv($id)
    {
        $item = Invoice::findOrFail($id);
        // Mengubah data menjadi array
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) : $item->part;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) : $item->keterangan;
        return view('pages.admin.monitoring_akuntan.viewInv', 
        compact('item'));
    }

    public function getVakture()
    {
        $data = Vakture::all();
        return view('pages.admin.monitoring_akuntan.vakture',
        compact('data'));
    }
}
