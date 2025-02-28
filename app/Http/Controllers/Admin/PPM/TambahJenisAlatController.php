<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TambahJenisAlat;

class TambahJenisAlatController extends Controller
{

    public function index()
    {
        $items = TambahJenisAlat::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM..tambah_jenis_alat.index', compact('items'));
    }

    public function store(Request $request)
    {
        $data =  $request->validate([
            'nama_jenis_alat' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        TambahJenisAlat::create($data);
        return redirect('/dashboard/ppm/registrasi-aset')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function edit($id)
    {
        $item = TambahJenisAlat::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.tambah_jenis_alat.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_jenis_alat' => '',
        ]);
        $data_item = TambahJenisAlat::findOrFail($id);
        $data_item->update($data);


        return redirect('/dashboard/ppm/tambah_jenis_alat')
            ->with('success', 'Data Item Berhasil Ubah.');
    }

    public function destroy($id)
    {
        $item = TambahJenisAlat::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/tambah_jenis_alat')->with('success', 'Data item Berhasil Di Hapus.');
    }

    // public function create()
    // {
    //     //
    // }

    // public function show($id)
    // {
    //     //
    // }
}
