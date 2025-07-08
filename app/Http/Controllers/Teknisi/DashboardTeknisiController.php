<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use Illuminate\Http\Request;

class DashboardTeknisiController extends Controller
{
    public function dashboard_teknisi()
    {
        $itemSelesai = DataBarang::where('ket', '0')->get();
        $itemPerbaikan = DataBarang::where('ket', '1')->get();
        $countSelesai = DataBarang::where('ket', '0')->count();
        $countPerbaikan = DataBarang::where('ket', '1')->count();
        return view('pages.teknisi.dashboard.index',
        compact('itemSelesai', 'itemPerbaikan', 'countSelesai', 'countPerbaikan'));
    }
}
