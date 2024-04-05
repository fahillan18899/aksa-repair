<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\PermintaanBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermintaanBarangAdmin extends Controller
{
    public function index()
    {
        $items = PermintaanBarang::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.Admin.PPM.permintaan_barang_admin.index', ['items' => $items]);
    }

    public function edit($id)
    {
        $item = PermintaanBarang::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.permintaan_barang_admin.update', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, PermintaanBarang $permintaan_barang_admin)
    {
        $request->validate([
            'nama' => '',
            'merek' => '',
            'type' => '',
            'jumlah' => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        $permintaan_barang_admin->fill($request->post())->save();

        return redirect()->route('permintaan_barang_admin.index')
            ->with('success', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $item = PermintaanBarang::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard/ppm/permintaan_barang_admin')->with('success', 'Data Berhasil Di Hapus');
    }
}
