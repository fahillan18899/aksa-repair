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
            'lokasi_tanggal'    => 'required',
            'no_surat'          => 'required',
            'hal'               => 'required',
            'yth'               => 'required',
            'nama_alat'         => 'required',
            'keterangan'        => 'required',
            'jumlah'            => 'required',
            'harga'             => 'required',
            'harga_tanpa_pajak' => 'required',
            'pajak'             => 'required',
            'total'             => 'required',
        ]);

        Sph::create($validate);
        return redirect()->route('marketing.data.sph')
        ->with('success', 'Data berhasil di simpan');
    }

    public function edit($id)
    {
        $item = Sph::findOrFail($id);
        return view('pages.marketing.sph.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'lokasi_tanggal'    => 'nullable',
            'no_surat'          => 'nullable',
            'hal'               => 'nullable',
            'yth'               => 'nullable',
            'nama_alat'         => 'nullable',
            'keterangan'        => 'nullable',
            'jumlah'            => 'nullable',
            'harga'             => 'nullable',
            'harga_tanpa_pajak' => 'nullable',
            'pajak'             => 'nullable',
            'total'             => 'nullable',
        ]);

        $item = Sph::findOrFail($id);
        $item->update($validate);
        return redirect()->route('marketing.data.sph')
        ->with('success', 'Sph berhasil di edit');
    }

    public function print($id)
    {
        $data = Sph::findOrFail($id);
        return view('pages.marketing.sph.print',
        compact('data'));
    }

    public function delete($id)
    {
        $item = Sph::findOrFail($id);
        $item->delete();
        return redirect()->route('marketing.data.sph')
        ->with('success', 'Sph berhasil dihapus');
    }
}
