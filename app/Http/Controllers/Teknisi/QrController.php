<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataBarang;
use PhpParser\Node\Stmt\Return_;

class QrController extends Controller
{
    public function index()
    {
        return view('pages.teknisi.qr.index');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'id_pertama' => 'required|string',
            'id_terakhir' => 'required|string',
        ]);

        $start = $request->id_pertama;
        $end = $request->id_terakhir;

        //Ambil semua alat yang dalam rentang nilai
        $alat = DataBarang::whereBetween('no_urut', [$start, $end])->get();

        if($alat->isEmpty()){
            return back()->with('error', 'Data alat tidak ditemukan');
        }

        return view('pages.teknisi.qr.result', compact('alat'));
    }
}
