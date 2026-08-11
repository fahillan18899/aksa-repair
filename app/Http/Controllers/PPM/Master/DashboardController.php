<?php

namespace App\Http\Controllers\PPM\Master;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Inv;
use App\Models\Perbaikan;
use App\Models\pelihara;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardMaster()
    {
        $tahun = date('Y');

        // ==========================================
        // TOTAL SEMUA RUMAH SAKIT
        // ==========================================

        $totalAlat = Inv::count();

        $alatDiperbaiki = Perbaikan::count();

        $alatNormal = max(0, $totalAlat - $alatDiperbaiki);

        $alatDipelihara = Pelihara::count();

        $alatBelumDipelihara = max(0, $totalAlat - $alatDipelihara);


        // ==========================================
        // DATA PERBAIKAN BULANAN SEMUA RS
        // ==========================================

        $perbaikanBulanan = Perbaikan::selectRaw(
                'MONTH(created_at) as bulan, COUNT(*) as total'
            )
            ->whereYear('created_at', $tahun)
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $dataPerbaikanBulanan = [];

        for ($i = 1; $i <= 12; $i++) {
            $dataPerbaikanBulanan[] = $perbaikanBulanan[$i] ?? 0;
        }


        // ==========================================
        // DATA PEMELIHARAAN BULANAN SEMUA RS
        // ==========================================

        $peliharaBulanan = Pelihara::selectRaw(
                'MONTH(created_at) as bulan, COUNT(*) as total'
            )
            ->whereYear('created_at', $tahun)
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $dataPeliharaBulanan = [];

        for ($i = 1; $i <= 12; $i++) {
            $dataPeliharaBulanan[] = $peliharaBulanan[$i] ?? 0;
        }


        // ==========================================
        // REKAP BERDASARKAN RUMAH SAKIT
        // ==========================================

        $rumahSakit = Inv::select('rs')
            ->selectRaw('COUNT(*) as total_alat')
            ->groupBy('rs')
            ->orderBy('rs')
            ->get();


        return view('pages.admin.PPM.master.index', compact(
            'tahun',
            'totalAlat',
            'alatDiperbaiki',
            'alatNormal',
            'alatDipelihara',
            'alatBelumDipelihara',
            'dataPerbaikanBulanan',
            'dataPeliharaBulanan',
            'rumahSakit'
        ));
    }
}
