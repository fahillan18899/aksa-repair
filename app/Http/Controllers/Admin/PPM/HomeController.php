<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registrasi;

class HomeController extends Controller
{
    function dataInventaris()
    {
        $items = Registrasi::all();

        return view('pages.admin.ppm.data_inventaris.index', ['items' => $items]);
    }

    function printDataInventaris($id)
    {
        $item = Registrasi::where('Id_Aset', $id)->first();
        return view('pages.admin.ppm.data_inventaris.cetak_aset', compact('item'));
    }

    function qrCodeGenerate($id)
    {
        $item = Registrasi::where('Id_Aset', $id)->first();
        return view('pages.admin.ppm.data_inventaris.qr_code', compact('item'));
    }
}
