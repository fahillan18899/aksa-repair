<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PekerjaanSelesaiController extends Controller
{
    public function index()
    {
        $data = Pembayaran::where('status', 1)->get();
        return view('pages.admin.pekerjaan_selesai.index',
        compact('data'));
    }
}
