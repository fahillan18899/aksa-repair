<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use Illuminate\Support\Facades\Auth;

class LaporanKegiatanController extends Controller
{
    public function index()
    {
        $regsitrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $unregsitrasi = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $lembarpemeliharaan = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.laporan_kegiatan.index', [

            'regsitrasi' => $regsitrasi,
            'unregsitrasi' => $unregsitrasi,
            'lembarpemeliharaan' => $lembarpemeliharaan,

        ]);
    }

    public function destroy($id)
    {

        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/laporan_kegiatan')->with('success', 'Data Berhasil Di Hapus.');
    }
}
