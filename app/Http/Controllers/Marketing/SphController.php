<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SphController extends Controller
{
    public function index()
    {
        return view('pages.marketing.sph.index');
    }
}
