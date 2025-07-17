<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use App\Models\Informasi;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class MonitoringTeknisiController extends Controller
{
    public function getApproval()
    {
        $data = DataBarang::where('status', '1')->get();
        return view('pages.admin.monitoring_teknisi.approval',
        compact('data'));
    }

    public function getAlatKembali()
    {
        $data = DataBarang::where('status', '0')->get();
        return view('pages.admin.monitoring_teknisi.alat_kembali',
        compact('data'));
    }

    public function getInformasi()
    {
        $data = Informasi::all();
        return view('pages.admin.monitoring_teknisi.informasi',
        compact('data'));
    }

    public function getBeritaAcara()
    {
        $data = BeritaAcara::all();
        return view('pages.admin.monitoring_teknisi.berita_acara',
        compact('data'));
    }

}
