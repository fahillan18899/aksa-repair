<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Http\Controllers\Controller;
use App\Models\JadwalPemeliharaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalPemeliharaanController extends Controller
{
    public function index()
    {
        $items = JadwalPemeliharaan::all();

        return view('pages.teknisi.jadwal_pemeliharaan.index', ['items' => $items]);
    }

    public function state()
    {
        $items = JadwalPemeliharaan::all();
        $states = DB::table('registrasis')->distinct('lokasi_alat')->pluck('lokasi_alat', 'id_aset');

        return view('pages.teknisi.jadwal_pemeliharaan.index', [

            'items' => $items,
            'states' => $states,
        ]);
    }

    public function city($id)
    {
        $cities = DB::table('registrasis')
            ->where('lokasi_alat', $id)
            ->pluck('nama_alat', 'id_aset');

        return json_encode($cities);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lokasi_alat' => '',
            'nama_alat' => '',
            'jadwal' => '',
        ]);

        JadwalPemeliharaan::create($data);

        return redirect('/dashboard_teknisi/jadwal_pemeliharaan')
            ->with('success', 'Data Perbaikan Berhasil Di Tambahkan.');
    }
}
