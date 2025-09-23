<?php

namespace App\Http\Controllers\Akuntan;

use App\Models\Pembayaran;
use App\Models\DataCustomer;
use App\Http\Controllers\Controller;

class DashboardAkuntanController extends Controller
{
    public function dashboard_akuntan()
    {
        return view('pages.akuntan.dashboard.index');
    }

    public function count_selesaiA()
    {
        $countSelesaiA = Pembayaran::where('status', 1)->count();
        return response()->json(['countSelesaiA' => $countSelesaiA]);
    }

    public function count_prosesA()
    {
        $countProsesA = DataCustomer::where('pengerjaan', 1)->count();
        return response()->json(['countProsesA' => $countProsesA]);
    }

    public function real_selesai()
    {
        $realSelesai = Pembayaran::where('status', 1)->get();
        return response()->json($realSelesai);
    }

    public function real_proses()
    {
        $realProses = DataCustomer::where('pengerjaan', 1)->get();
        return response()->json($realProses);
    }
}
