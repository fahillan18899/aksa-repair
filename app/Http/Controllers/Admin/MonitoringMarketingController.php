<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\InputCustomer;
use App\Models\DataCustomer;
use App\Http\Controllers\Controller;
use App\Models\Pembayaran;

class MonitoringMarketingController extends Controller
{
    public function index()
    {
        $data = InputCustomer::all();
        return view('pages.admin.monitoring_marketing.input_cs',
        compact('data'));
    }

    public function index2()
    {
        $data = Invoice::all();
        return view('pages.admin.monitoring_marketing.data_invoice',
        compact('data'));
    }

    public function index3()
    {
        $data = DataCustomer::all();
        return view('pages.admin.monitoring_marketing.kegiatan_kalibrasi',
        compact('data'));
    }

    public function index4()
    {
        $data = Pembayaran::all();
        return view('pages.admin.monitoring_marketing.pembayaran',
        compact('data'));
    }

}
