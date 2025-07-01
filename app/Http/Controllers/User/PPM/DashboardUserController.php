<?php

namespace App\Http\Controllers\User\PPM;

use App\Models\Pesanan;
use App\Models\Registrasi;
use Illuminate\Support\Facades\DB;
use App\Models\PerbaikanRegistrasi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{


    public function index()
    {
        return view('pages.user.dashboard.index');
    }
}
