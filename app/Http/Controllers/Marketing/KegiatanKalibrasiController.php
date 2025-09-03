<?php

namespace App\Http\Controllers\Marketing;

use App\Models\Sph;
use App\Models\SphOld;
use App\Models\Informasi;
use App\Models\SphHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KegiatanKalibrasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KegiatanKalibrasiController extends Controller
{
    public function index()
    {
        $users = Auth::user()->username;
        $item = KegiatanKalibrasi::all();
        return view('pages.marketing.kegiatan_kalibrasi.index',
        compact('item'));
    }

}
