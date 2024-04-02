<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Http\Controllers\Controller;
use App\Models\JadwalPemeliharaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalPemeliharaanController extends Controller
{
    public function index()
    {
        $items = JadwalPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.teknisi.jadwal_pemeliharaan.index', ['items' => $items]);
    }

    public function state()
    {
        $items = JadwalPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->get();
        $states = DB::table("registrasis")->where('kode_rs', Auth::user()->kode_rs)->distinct('lokasi_alat')->pluck('lokasi_alat', 'id_aset');

        return view('pages.teknisi.jadwal_pemeliharaan.index', [

            'items' => $items,
            'states' => $states,
        ]);
    }

    public function city($id)
    {
        $cities = DB::table("registrasis")
        ->where("lokasi_alat", $id)
            ->pluck('nama_alat', 'id_aset');
        return json_encode($cities);
    }

    public function updateStatusTeknisi($id)
    {
        $item = JadwalPemeliharaan::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        if ($item) {
            if ($item->status == '0') {
                $item->status = '1';
            } else {
                $item->status = '0';
            }

            $item->save();
        }
        return back();
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
