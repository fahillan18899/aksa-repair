<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Registrasi;
use Illuminate\Http\Request;

class DataAlatController extends Controller
{
    public function index($id)
    {
            return view('pages.admin.PPM.data_alat.index');
    }
}

