<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index()
    {
        return view('pages.teknisi.qr.index');
    }
}
