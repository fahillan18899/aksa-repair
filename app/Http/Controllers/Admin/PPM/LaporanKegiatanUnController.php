<?php

namespace App\Http\Controllers\Admin\PPM;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use Illuminate\Support\Facades\Auth;
class LaporanKegiatanUnController extends Controller
{
    public function destroyun($id)
    {

        $item = PerbaikanUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/laporan_kegiatan')->with('success', 'Data Berhasil Di Hapus.');
    }
}
