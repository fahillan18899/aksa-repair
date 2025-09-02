<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vakture;
use App\Models\Invoice;
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

    public function index9()
    {
        $data = Invoice::all();
        return view('pages.admin.monitoring_akuntan.pembuatan_invo', 
        compact('data'));
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
