<?php

namespace App\Http\Controllers;

use App\Models\PemeliharaanAlat;
use Illuminate\Http\Request;

class PemeliharaanAlatController extends Controller
{
   
    public function index()
    {
        return view('pages.admin.PPM.lembar_pemeliharaan.index');
    }
}
