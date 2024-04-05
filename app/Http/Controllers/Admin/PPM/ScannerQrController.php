<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScannerQrController extends Controller
{
    public function index()
    {
        return view('pages.admin.PPM.scanner_qr.index');
    }
}
