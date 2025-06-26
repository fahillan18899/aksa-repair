<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class PesananTeknisiController extends Controller
{
    public function getPesanan()
    {
        $pesanan = Pesanan::where('kode_rs', Auth::user()->kode_rs)->orderBy('created_at', 'desc')->get();
        return response()->json($pesanan);
    }
}
