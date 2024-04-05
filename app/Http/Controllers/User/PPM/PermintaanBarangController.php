<?php

namespace App\Http\Controllers\User\PPM;

use App\Http\Controllers\Controller;
use App\Models\PermintaanBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermintaanBarangController extends Controller
{
    public function index()
    {
        $items = PermintaanBarang::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.user.permintaan_barang.index', ['items' => $items]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'jumlah' => 'numeric',

        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        PermintaanBarang::create($request->post());

        return redirect()->route('permintaan_barang.index')
            ->with('success', 'Data Berhasil Di Tambahkan.');
    }

    public function edit($id)
    {
        $item = PermintaanBarang::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.user.permintaan_barang.update', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, PermintaanBarang $permintaan_barang)
    {
        $request->validate([
            'nama' => '',
            'merek' => '',
            'type' => '',
            'jumlah' => '',
        ]);
        $permintaan_barang->fill($request->post())->save();

        return redirect()->route('permintaan_barang.index')
            ->with('success', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $item = PermintaanBarang::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard_user/permintaan_barang')->with('success', 'Data Berhasil Di Hapus');
    }
}
