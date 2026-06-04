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

        return view('pages.admin.PPM.monitoring.index', compact(
            'totalAlat',
            'alatDiperbaiki',
            'alatNormal',
            'alatDipelihara',
            'alatBelumDipelihara'
        ));
    }
}
