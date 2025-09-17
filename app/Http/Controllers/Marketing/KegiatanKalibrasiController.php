<?php

namespace App\Http\Controllers\Marketing;
use App\Models\DataCustomer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class KegiatanKalibrasiController extends Controller
{
    public function index()
    {
        $users = Auth::user()->username;
        $item = DataCustomer::all();
        return view('pages.marketing.kegiatan_kalibrasi.index',
        compact('item'));
    }

}
