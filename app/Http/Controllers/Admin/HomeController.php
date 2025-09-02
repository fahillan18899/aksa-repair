<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\DataBarang;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.PPM.dashboard.index');
    }

    // public function repair_selesai()
    // {
    //     $dataApi1 = DataBarang::where('ket', '5')->get();
    //     return response()->json($dataApi1);
    // }

    // public function repair_proses()
    // {
    //     $dataApi2 = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->get();
    //     return response()->json($dataApi2);
    // }

    // public function count1()
    // {
    //     $count1 = DataBarang::where('ket', '5')->count();
    //     return response()->json(['count1' => $count1]);
    // }

    // public function count2()
    // {
    //     $count2 = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->count();
    //     return response()->json(['count2' => $count2]);
    // }


}
