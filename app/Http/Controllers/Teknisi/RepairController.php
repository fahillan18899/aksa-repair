<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index()
    {
        $item = DataBarang::all();
        return view('pages.teknisi.repair.index', 
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'no_urut'        => 'nullable',
            'nama_alat'      => 'required',
            'no_seri'        => 'required',
            'type'           => 'required',
            'kerusakan_alat' => 'required',
            'instansi'       => 'required',
        ]);

        $count = DataBarang::count() + 1;
        $nomerUrut = str_pad($count, 5, '0', STR_PAD_LEFT);
        $validate['no_urut']= $nomerUrut;
        
        DataBarang::create($validate);
        return redirect()->route('teknisi.data.repair')
        ->with('success', 'Data berhasil disimpan');

    }

    public function edit($id)
    {
        $item = DataBarang::findOrFail($id);
        return view('pages.teknisi.repair.edit', 
        compact('item'));
    }

    public function update( Request $request, $id)
    {
        $validate = $request->validate([
            'no_urut'        => 'required',
            'nama_alat'      => 'required',
            'no_seri'        => 'required',
            'type'           => 'required',
            'kerusakan_alat' => 'required',
            'instansi'       => 'required',
        ]);

        $item = DataBarang::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.data.repair')
        ->with('success', 'Data berhasil di ubah');
    }

    public function status($id)
    {
        $item = DataBarang::findOrFail($id);
        $item->status = $item->status === '0' ? '1' : '0';
        $item->save();
        return back();
    }

    public function ket($id)
    {
        $item = DataBarang::findOrFail($id);
        $item->ket = $item->ket === '0' ? '1' : '0';
        $item->save();
        return back();
    }

    public function delete($id)
    {
        $item = DataBarang::findOrFail($id);
        $item->delete();
        return redirect()->route('teknisi.data.repair')
        ->with('success', 'Data berhasil di hapus');
    }
}
