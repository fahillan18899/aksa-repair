<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChasBack;
use App\Models\Invoice;
use App\Models\Pembayaran;
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

    public function index10()
    {
        $data = Pembayaran::all();
        return view('pages.admin.monitoring_akuntan.alur_pembayaran',
        compact('data'));
    }

    public function index11()
    {
        $data = ChasBack::all();
        return view('pages.admin.monitoring_akuntan.chas_back',
        compact('data'));
    }
}
