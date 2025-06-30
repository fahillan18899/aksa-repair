<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index()
    {
        return view('pages.teknisi.repair.index');
    }
}
