<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
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
}
