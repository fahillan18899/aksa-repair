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
        return view('pages.admin.invoice',
        compact('data'));
    }

    public function getVakture()
    {
        $data = Vakture::all();
        return view('pages.admin.vakture',
        compact('data'));
    }
}
