<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeknisiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_teknisi' => 'required',
            'nama_teknisi' => 'required',
            'kode_rs' => 'required',
        ]);

        Teknisi::create([
            'id_teknisi' => $request->id_teknisi,
            'nama_teknisi' => $request->nama_teknisi,
            'kode_rs' => Auth::user()->kode_rs,
        ]);

        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('message', 'Data Teknisi Berhasil di Tambahkan.');
    }

    public function edit($teknisi)
    {
        $item = Teknisi::where('id_teknisi', $teknisi)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.data_kelengkapan.update_teknisi', compact('item'));
    }

    public function update(Request $request, Teknisi $teknisi)
    {
        $request->validate([
            'id_teknisi' => '',
            'nama_teknisi' => '',
        ]);

        $teknisi->fill($request->post())->save();


        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('success', 'Data Teknisi Berhasil Tambahkan.');
    }

    public function destroy($id)
    {

        $item = Teknisi::where('id_teknisi', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Teknisi Berhasil Di Hapus.');
    }
}
