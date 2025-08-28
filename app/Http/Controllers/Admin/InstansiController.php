<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    public function index()
    {
        $data = Instansi::all();
        return view('pages.admin.instansi.index',
        compact('data'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
        'instansi'  => 'required|unique:instansis',
        ],['instansi.unique' => 'Nama Instansi Sudah Ada',]);

        Instansi::create($validate);
        return back()->with('success', 'Data Instansi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = Instansi::findOrFail($id);
        return view('pages.admin.instansi.edit',
        compact('item'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
        'instansi'  => 'required|unique:instansis',
        ],['instansi.unique' => 'Nama Instansi Sudah Ada',]);

        $item = Instansi::findOrFail($id);
        $item->update($validate);
        return redirect()->route('instansi.data')
        ->with('success', 'Data Berhasil di Edit');

    }

    public function delete($id)
    {
        $item = Instansi::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Data Berhasil dihapus');
    }

}
