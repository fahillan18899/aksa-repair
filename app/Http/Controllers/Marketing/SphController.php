<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Sph;
use Illuminate\Http\Request;

class SphController extends Controller
{
    public function index()
    {
        $item = Sph::all();
        return view('pages.marketing.sph.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'lokasi_tanggal' => 'required',
            'no_surat' => 'required',
            'hal' => 'required',
            'yth' => 'required',
            'nama_alat' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'harga_tanpa_pajak' => 'required',
            'pajak' => 'required',
            'total' => 'required',
        ]);

        Sph::create($validate);
        return redirect()->route('marketing.data.sph')
        ->with('success', 'Data berhasil di simpan');
    }

    public function print($id)
    {
        $data = Sph::findOrFail($id);
        return view('pages.marketing.sph.print',
        compact('data'));
    }
}
