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
        $item = Registrasi::where('id_aset', $id)->first();
        return view('pages.admin.ppm.data_inventaris.cetak_aset', compact('item'));
    }

    
    function qrCodeGenerate($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        return view('pages.admin.ppm.data_inventaris.qr_code', compact('item'));
    }

    function analisData()
    {
        $item = Registrasi::all();
        return view('pages.admin.ppm.analisis_data.index', compact('item'));
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

    public function autofillPengiriman($id_perbaikan_reg)
    {
        $data = DB::table('perbaikan_registrasis')->where('id_perbaikan_reg', $id_perbaikan_reg)->first();

        return response()->json([
            'Id_Perbaikan_reg'            => $data->id_perbaikan_reg,
            'Tanggal_Perbaikan_reg'       => $data->tanggal_perbaikan_reg,
            'ID_Aset_reg'                 => $data->id_aset_reg,
            'Nama_Alat_reg'               => $data->nama_alat_reg,
            'Merek_Alat_reg'              => $data->merek_alat_reg,
            'Type_Alat_reg'               => $data->type_alat_reg,
            'Serial_Number_reg'           => $data->serial_number_reg,
            'Lokasi_Alat_reg'             => $data->lokasi_alat_reg,
            'Teknisi_1_reg'               => $data->teknisi_1_reg,
            'Pelapor_reg'                 => $data->pelapor_reg,
            'Teknisi_2_reg'               => $data->teknisi_2_reg,
            'Teknisi_3_reg'               => $data->teknisi_3_reg,
            'Keterangan_Kondisi_Alat_reg' => $data->keterangan_kondisi_alat_reg,
            'Ka_Instalasi_reg'            => $data->ka_instalasi_reg
        ]);
    }
}
