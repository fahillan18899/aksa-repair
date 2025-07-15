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
        return view('pages.admin.monitoring_marketing.input_data',
        compact('data'));
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
        return view('pages.admin.monitoring_marketing.viewSph',
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
        return view('pages.admin.monitoring_marketing.viewInvo',
        compact('item'));
    }
}
