<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTeknisiController extends Controller
{
    public function dashboard_teknisi()
    {
        return view('pages.teknisi.dashboard.index');
    }
}
