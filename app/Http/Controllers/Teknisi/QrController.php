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
                'id_pertama' => 'required|integer|min:1',
                'id_terakhir' => 'required|integer|min:1',
            ]);

            $start = (int) $request->id_pertama;
            $end = (int) $request->id_terakhir;

            if ($start > $end) {
                return back()->with('error', 'No urut awal tidak boleh lebih besar dari no urut akhir');
            }

            $qrNumbers = range($start, $end);

            return view('pages.teknisi.qr.result', compact('qrNumbers'));
        }
}
