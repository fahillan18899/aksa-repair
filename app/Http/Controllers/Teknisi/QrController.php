<?php

namespace App\Http\Controllers\Teknisi;

use App\Models\DataBarang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QrController extends Controller
{
    public function index()
    {
        $items = DataBarang::all();
        return view('pages.teknisi.qr.index',
        compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pertama' => 'required|string',
            'id_terakhir' => 'required|string',
        ]);

        $start = $request->id_pertama;
        $end = $request->id_terakhir;

        //Ambil semua alat yang dalam rentang nilai
        $alat = DataBarang::whereBetween('id', [$start, $end])->get();

        if($alat->isEmpty()){
            return back()->with('error', 'Data alat tidak ditemukan');
        }

        return view('pages.teknisi.qr.result', compact('alat'));
    }
}
