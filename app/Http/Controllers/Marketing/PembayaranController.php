<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index() 
    {
        $marketing = Auth::user()->username;
        $item = Invoice::where('marketing', $marketing)->get();
        return view('pages.marketing.pembayaran.index',
        compact('item'));
    }

    public function view($id)
    {
        $item = Invoice::findOrFail($id);
        $item->akom = is_string($item->akom) ? json_decode($item->akom, true) ?? [] : $item->akom;
        $item->part = is_string($item->part) ? json_decode($item->part, true) ?? [] : $item->part;
        $item->nama_alat = is_string($item->nama_alat) ? json_decode($item->nama_alat, true) ?? [] : $item->nama_alat;
        $item->keterangan = is_string($item->keterangan) ? json_decode($item->keterangan, true) ?? [] : $item->keterangan;
        return view('pages.marketing.invoice.view',
        compact('item'));
    }
}
