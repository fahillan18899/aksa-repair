<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardMarketingController extends Controller
{
    public function dashboard_marketing()
    {
        return view('pages.marketing.dashboard.index');
    }
}
