<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class DashboardMarketingController extends Controller
{
    public function dashboard_marketing()
    {
        return view('pages.marketing.dashboard.index');
    }

    public function fetch_selesai()
    {
        $repair = DataBarang::where('ket', '5')->get();
        return response()->json($repair);
    }

    public function fetch_proses()
    {
        $proses = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->get();
        return response()->json($proses);
    }

    public function count_selesai()
    {
        $countSelesai = DataBarang::where('ket', '5')->count();
        return response()->json(['countSelesai' => $countSelesai]);
    }

    public function count_proses()
    {
        $countProses = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->count();
        return response()->json(['countProses' => $countProses]);
    }
}
