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
        $itemSelesai = DataBarang::where('ket', '0')->get();
        $itemPerbaikan = DataBarang::where('ket', '1')->get();
        $countSelesai = DataBarang::where('ket', '0')->count();
        $countPerbaikan = DataBarang::where('ket', '1')->count();
        return view('pages.marketing.dashboard.index', 
        compact('itemSelesai', 'itemPerbaikan', 'countSelesai', 'countPerbaikan'));
    }

    public function fetch_selesai()
    {
        $repair = DataBarang::where('ket', '0')->get();
        return response()->json($repair);
    }

    public function fetch_proses()
    {
        $proses = DataBarang::where('ket', '1')->get();
        return response()->json($proses);
    }

    public function count_selesai()
    {
        $countSelesai = DataBarang::where('ket', '0')->count();
        return response()->json(['countSelesai' => $countSelesai]);
    }

    public function count_proses()
    {
        $countProses = DataBarang::where('ket', '1')->count();
        return response()->json(['countProses' => $countProses]);
    }
}
