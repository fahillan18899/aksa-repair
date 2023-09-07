<?php

namespace App\Http\Controllers\AdminKalibrasi;

use App\Http\Controllers\Controller;
use App\Models\Kalibrasi\AlatUkur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeKalibrasiController extends Controller
{
    function index()
    {
        return view('pages.kalibrasi.admin.home');
    }

    function alatUkur()
    {
        $kode_rs = Auth::user()->kode_rs;

        $data = DB::table('alat_ukurs')
            ->select(DB::raw('max(id_number) as maxIDASET'))
            // ->where('kode_rs', $kodeRs_)
            ->first();
        $id_number = $data->maxIDASET;

        $urutan = (int)substr($id_number, 1, 3);
        $urutan++;

        $date  = date('dmy');
        $id_number  =  sprintf("%03s", $urutan);
        $items = AlatUkur::all();
        return view('pages.kalibrasi.admin.alat_ukur.index', [
            'items' => $items,
            'id_number' => $id_number,
        ]);
    }
}
