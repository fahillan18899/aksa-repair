<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAkuntanController extends Controller
{
    public function dashboard_akuntan()
    {
        return view('pages.akuntan.dashboard.index');
    }
}
