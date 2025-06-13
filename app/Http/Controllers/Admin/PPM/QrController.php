<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Registrasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function form()
    {
        return view('pages.admin.qr.form');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'start_id' => 'required|string',
            'end_id' => 'required|string',
        ]);

        $start = $request->start_id;
        $end = $request->end_id;

        //Ambil semua alat yang idnya berada dalam rentang
        $alatList = Registrasi::whereBetween('id_aset', [$start, $end])->get();

        if($alatList->isEmpty()) {
            return back()->with('error', 'Data alat tidak ditemukan');
        }

        return view('pages.admin.qr.result', compact('alatList'));
    }
}
