<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;  
use Illuminate\Http\Request;

class DashboardAkuntanController extends Controller
{
    public function dashboard_akuntan()
    {
        $itemSelesai = DataBarang::where('ket', '0')->get();
        $itemPerbaikan = DataBarang::where('ket', '1')->get();
        $countSelesai = DataBarang::where('ket', '0')->count();
        $countPerbaikan = Databarang::where('ket', '1')->count();
        return view('pages.akuntan.dashboard.index',
        compact('itemSelesai', 'itemPerbaikan', 'countSelesai', 'countPerbaikan'));
    }

    public function real_selesai()
    {
        $realSelesai = DataBarang::where('ket', '0')->get();
        return response()->json($realSelesai);
    }

    public function real_proses()
    {
        $realProses = DataBarang::where('ket', '1')->get();
        return response()->json($realProses);
    }

    public function count_selesaiA()
    {
        $countSelesaiA = DataBarang::where('ket', '0')->count();
        return response()->json(['countSelesaiA' => $countSelesaiA]);
    }

    public function count_prosesA()
    {
        $countProsesA = DataBarang::where('ket', '1')->count();
        return response()->json(['countProsesA' => $countProsesA]);
    }
}
