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
