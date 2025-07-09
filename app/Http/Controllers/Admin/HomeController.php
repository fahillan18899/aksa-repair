<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\DataBarang;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        $countSelesai = DataBarang::where('ket', '0')->count();
        $countPerbaikan = DataBarang::where('ket', '1')->count();
        return view('pages.admin.PPM.dashboard.index',
        compact('countSelesai', 'countPerbaikan'));
    }

    public function repair_selesai()
    {
        $dataApi1 = DataBarang::where('ket', '0')->get();
        return response()->json($dataApi1);
    }

    public function repair_proses()
    {
        $dataApi2 = DataBarang::where('ket', '1')->get();
        return response()->json($dataApi2);
    }

    public function count1()
    {
        $count1 = DataBarang::where('ket', '0')->count();
        return response()->json(['count1' => $count1]);
    }

    public function count2()
    {
        $count2 = DataBarang::where('ket', '1')->count();
        return response()->json(['count2' => $count2]);
    }


}
