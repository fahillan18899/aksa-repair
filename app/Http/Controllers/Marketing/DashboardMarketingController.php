<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\DataCustomer;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class DashboardMarketingController extends Controller
{
    public function dashboard_marketing()
    {
        return view('pages.marketing.dashboard.index');
    }

    public function count_selesai()
    {
        $countSelesai = Pembayaran::where('status', 1)->count();
        return response()->json(['countSelesai' => $countSelesai]);
    }

    public function count_proses()
    {
        $countProses = DataCustomer::where('pengerjaan', 1)->count();
        return response()->json(['countProses' => $countProses]);
    }

    public function fetch_selesai()
    {
        $repair = Pembayaran::where('status', 1)->get();
        return response()->json($repair);
    }

    public function fetch_proses()
    {
        $proses = DataCustomer::where('pengerjaan', 1)->get();
        return response()->json($proses);
    }
}
