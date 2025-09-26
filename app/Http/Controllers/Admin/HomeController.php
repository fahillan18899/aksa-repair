<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pembayaran;
use App\Models\DataCustomer;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.PPM.dashboard.index');
    }

    public function count1()
    {
        $count1 = Pembayaran::where('status', 1)->count();
        return response()->json(['count1' => $count1]);
    }

    public function count2()
    {
        $count2 = DataCustomer::where('pengerjaan', 1)->count();
        return response()->json(['count2' => $count2]);
    }

    public function repair_selesai()
    {
        $dataApi1 = Pembayaran::where('status', 1)->get();
        return response()->json($dataApi1);
    }

    public function repair_proses()
    {
        $dataApi2 = DataCustomer::where('pengerjaan', 1)->get();
        return response()->json($dataApi2);
    }

}
