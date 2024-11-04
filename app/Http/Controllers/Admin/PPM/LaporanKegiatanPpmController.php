<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LembarPemeliharaan;
use Illuminate\Support\Facades\Auth;

class LaporanKegiatanPpmController extends Controller
{
    public function destroyppm($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        $lembarPemeliharaan->delete();

        return redirect('/dashboard/ppm/laporan_kegiatan')
            ->with('success', 'Lembar Pemeliharaan berhasil dihapus.');
    }
}
