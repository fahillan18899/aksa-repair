<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputanPekerjaanController extends Controller
{
    public function index() 
    {
        return view('pages.marketing.inputan_pekerjaan.index');
    }
}
