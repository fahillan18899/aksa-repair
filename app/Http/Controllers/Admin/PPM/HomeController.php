<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registrasi;
use Illuminate\Support\Facades\DB;


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

    public function autofill($idars)
    {
        $data = DB::table('registrasis')->where('id_aset', $idars)->first();

        return response()->json([
            'Merek_Alat_reg' => $data->merek,
            'Nama_Alat_reg' => $data->nama_alat,
            'Serial_Number_reg' => $data->serial_number,
            'Lokasi_Alat_reg' => $data->lokasi_alat,
            'Type' => $data->type,
        ]);
    }
}
