<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rekap;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RekapController extends Controller
{
    public function index()
    {
        $items = Rekap::all();
        return view('pages.admin.rekap.index', compact('items'));
    }

    public function edit($id)
    {
        $item = Rekap::findOrFail($id);
        return view('pages.admin.rekap.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'tanggal'    => '',
            'marketing'  => '',
            'instansi'   => '',
            'akomodasi'  => '',
            'sperpart'   => '',
            'sph'        => '',
            'invoice'    => '',
            'nominal'    => '',
            'ppn'        => '',
            'pph3'       => '',
            'admin'      => '',
            'status'     => '',
            'keuntungan' => '',
            'ket'        => '',
        ]);

        $item = Rekap::findOrFail($id);
        $item->update($validate);
        return redirect()->route('rekap.index')
        ->with('success', 'Data Berhasil di edit');
    }

    public function destroy($id)
    {
        $item= Rekap::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
