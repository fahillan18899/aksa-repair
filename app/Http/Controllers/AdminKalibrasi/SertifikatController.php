<?php

namespace App\Http\Controllers\AdminKalibrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()
    {
        return view('pages.kalibrasi.admin.sertifikat.index');
    }
}
