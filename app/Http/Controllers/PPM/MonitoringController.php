<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inv;
use App\Models\Perbaikan;
use App\Models\pelihara;

class MonitoringController extends Controller
{
    public function dashboardPpm()
    {
        // PERBAIKAN
        $totalAlat = Inv::count();

        $alatDiperbaiki = Perbaikan::count();

        $alatNormal = max(0, $totalAlat - $alatDiperbaiki);

        // PELIHARA
        $alatDipelihara = pelihara::count();

        $alatBelumDipelihara = max(0, $totalAlat - $alatDipelihara);


        // BAR CHART PERBAIKAN PER BULAN
        $perbaikanBulanan = Perbaikan::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $dataPerbaikanBulanan = [];

        for ($i = 1; $i <= 12; $i++) {
            $dataPerbaikanBulanan[] = $perbaikanBulanan[$i] ?? 0;
        }


        // BAR CHART PELIHARA PER BULAN
        $peliharaBulanan = Pelihara::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $dataPeliharaBulanan = [];

        for ($i = 1; $i <= 12; $i++) {
            $dataPeliharaBulanan[] = $peliharaBulanan[$i] ?? 0;
        }        
        return view('pages.admin.PPM.monitoring.index', compact(
            'totalAlat',
            'alatDiperbaiki',
            'alatNormal',
            'alatDipelihara',
            'alatBelumDipelihara',
            'dataPerbaikanBulanan',
            'dataPeliharaBulanan'
        ));
    }
}
