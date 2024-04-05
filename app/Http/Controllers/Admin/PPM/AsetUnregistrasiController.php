<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\PengembalianUnregistrasi;
use App\Models\PenghapusanUnregistrasi;
use App\Models\PengirimanUnregistrasi;
use App\Models\PerbaikanUnregistrasi;

class AsetUnregistrasiController extends Controller
{
    public function index()
    {
        $perbaikan = PerbaikanUnregistrasi::all();
        $pengiriman = PengirimanUnregistrasi::all();
        $pengembalian = PengembalianUnregistrasi::all();
        $penghapusan = PenghapusanUnregistrasi::all();

        return view('pages.admin.PPM.aset_unregistrasi.index', [

            'perbaikan' => $perbaikan,
            'pengiriman' => $pengiriman,
            'pengembalian' => $pengembalian,
            'penghapusan' => $penghapusan,

        ]);
    }
}
