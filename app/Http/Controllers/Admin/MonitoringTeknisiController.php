<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use App\Models\AlatKembali;
use App\Models\Informasi;
use Illuminate\Http\Request;

class MonitoringTeknisiController extends Controller
{
    public function getApproval()
    {
        $data = DataBarang::all();
        return view('pages.admin.approval',
        compact('data'));
    }

    public function getAlatKembali()
    {
        $data = AlatKembali::all();
        return view('pages.admin.alat_kembali',
        compact('data'));
    }

    public function getInformasi()
    {
        $data = Informasi::all();
        return view('pages.admin.informasi',
        compact('data'));
    }

    public function getQr()
    {
        return view('pages.admin.qr_generate');
    }
}
