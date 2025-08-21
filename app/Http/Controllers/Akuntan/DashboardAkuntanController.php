<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;  
use Illuminate\Http\Request;

class DashboardAkuntanController extends Controller
{
    public function dashboard_akuntan()
    {
        return view('pages.akuntan.dashboard.index');
    }

    public function real_selesai()
    {
        $realSelesai = DataBarang::where('ket', '5')->get();
        return response()->json($realSelesai);
    }

    public function real_proses()
    {
        $realProses = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->get();
        return response()->json($realProses);
    }

    public function count_selesaiA()
    {
        $countSelesaiA = DataBarang::where('ket', '5')->count();
        return response()->json(['countSelesaiA' => $countSelesaiA]);
    }

    public function count_prosesA()
    {
        $countProsesA = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->count();
        return response()->json(['countProsesA' => $countProsesA]);
    }
}
