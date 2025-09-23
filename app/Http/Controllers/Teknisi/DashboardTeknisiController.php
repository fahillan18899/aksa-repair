<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use App\Models\Pembayaran;

class DashboardTeknisiController extends Controller
{
    public function dashboard_teknisi()
    {
        return view('pages.teknisi.dashboard.index');
    }

    public function countS_teknisi()
    {
        $countsTeknisi = Pembayaran::where('status', 1)->count();
        return response()->json(['countsTeknisi' => $countsTeknisi]);
    }

    public function countP_teknisi()
    {
        $countpTeknisi = DataCustomer::where('pengerjaan', 1)->count();
        return response()->json(['countpTeknisi' => $countpTeknisi]);
    }

    public function selesai_teknisi()
    {
        $selesaiTeknisi = Pembayaran::where('status', 1)->get();
        return response()->json($selesaiTeknisi);
    }

    public function proses_teknisi()
    {
        $prosesTeknisi = DataCustomer::where('pengerjaan', 1)->get();
        return response()->json($prosesTeknisi);
    }
}
