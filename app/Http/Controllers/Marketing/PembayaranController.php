<?php

namespace App\Http\Controllers\Marketing;

use App\Models\Pembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index() 
    {
        $marketing = Auth::user()->username;
        $item = Pembayaran::where('marketing', $marketing)->get();
        return view('pages.marketing.pembayaran.index',
        compact('item'));
    }
}
