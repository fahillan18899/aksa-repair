<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use App\Models\InputPekerjaan;
use Illuminate\Http\Request;

class DashboardTeknisiController extends Controller
{
    public function dashboard_teknisi()
    {
        $itemPekerjaan = InputPekerjaan::all();
        $itemSelesai = DataBarang::where('ket', '5')->get();
        $itemPerbaikan = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->get();
        $countSelesai = DataBarang::where('ket', '5')->count(); 
        $countPerbaikan = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->count();
        return view('pages.teknisi.dashboard.index',
        compact('itemPekerjaan', 'itemSelesai', 'itemPerbaikan', 'countSelesai', 'countPerbaikan'));
    }
}
