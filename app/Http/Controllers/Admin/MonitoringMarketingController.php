<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InputPekerjaan;
use App\Models\DataBarang;
use App\Models\Sph;
use App\Models\Invoice;
use Illuminate\Http\Request;

class MonitoringMarketingController extends Controller
{
    public function getInputPekerjaan()
    {
        $data = InputPekerjaan::all();
        return view('pages.admin.input_data',
        compact('data'));
    }

    public function getDataBarang()
    {
        $data = DataBarang::all();
        return view('pages.admin.data_barang',
        compact('data'));
    }

    public function getSph()
    {
        $data = Sph::all();
        return view('pages.admin.sph',
        compact('data'));
    }

    public function getInvoice()
    {
        $data = Invoice::all();
        return view('pages.admin.invoice',
        compact('data'));
    }
}
