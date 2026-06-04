<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function dashboardPpm()
    {
        return view('pages.admin.PPM.monitoring.index');
    }
}
