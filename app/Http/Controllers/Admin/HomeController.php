<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataBarang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        $countSelesai = DataBarang::where('ket', '0')->count();
        $countPerbaikan = DataBarang::where('ket', '1')->count();
        $instansis = DataBarang::select('instansi')->groupBy('instansi')->get();

        // Hitung jumlah status per instansi
        $statusCounts = DataBarang::select(
            'instansi',
            DB::raw("SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) as count_sudah"),
            DB::raw("SUM(CASE WHEN status = 0 THEN 1 ELSE 0 END) as count_belum")
        )
        ->groupBy('instansi')->get()
        ->keyBy('instansi'); // Supaya bisa diakses dengan $statusCounts[$instansi]
        return view('pages.admin.PPM.dashboard.index',
        compact('countSelesai', 'countPerbaikan', 'instansis', 'statusCounts'));
    }

    public function insDetail($instansi)
    {
        $decodedInstansi = urldecode($instansi);
        //Ambil data barang sesuai instansi
        $dataBarang = DataBarang::where('instansi', $decodedInstansi)
        ->orderBy('status', 'desc')->get();
        return view('pages.admin.PPM.dashboard.detail',
        compact('decodedInstansi', 'dataBarang'));
    }

    public function repair_selesai()
    {
        $dataApi1 = DataBarang::where('ket', '5')->get();
        return response()->json($dataApi1);
    }

    public function repair_proses()
    {
        $dataApi2 = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->get();
        return response()->json($dataApi2);
    }

    public function count1()
    {
        $count1 = DataBarang::where('ket', '5')->count();
        return response()->json(['count1' => $count1]);
    }

    public function count2()
    {
        $count2 = DataBarang::whereIn('ket', ['1', '2', '3', '4'])->count();
        return response()->json(['count2' => $count2]);
    }


}
