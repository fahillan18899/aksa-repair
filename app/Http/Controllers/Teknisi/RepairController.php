<?php

namespace App\Http\Controllers\Teknisi;

use App\Models\DataBarang;
use Illuminate\Http\Request;
use App\Models\InputPekerjaan;
use App\Http\Controllers\Controller;

class RepairController extends Controller
{
    public function index()
    {
        $item = DataBarang::all();
        $data = InputPekerjaan::all();
        return view('pages.teknisi.repair.index', 
        compact('item', 'data'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'no_urut'        => 'nullable',
            'nama_alat'      => 'nullable',
            'merek'          => 'nullable',
            'type'           => 'nullable',
            'no_seri'        => 'nullable',
            'kerusakan_alat' => 'nullable',
            'instansi'       => 'nullable',
            'user'           => 'nullable'
        ]);
        
        InputPekerjaan::where('no_urut', $request->no_urut)->update(['status' => 1]);

        DataBarang::create($validate);
        return back()->with('success', 'Data berhasil disimpan');

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
            'merek'          => 'required',
            'type'           => 'required',
            'no_seri'        => 'required',
            'kerusakan_alat' => 'required',
            'instansi'       => 'required',
        ]);

        $item = DataBarang::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.repair.index')
        ->with('success', 'Data berhasil di ubah');
    }

    public function destroy($id)
    {
        $item = DataBarang::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Data berhasil di hapus');
    }

    public function repairBa($id) 
    {
        $item = DataBarang::findOrFail($id);
        return view('pages.teknisi.repair.ba_repair',
        compact('item'));
    }

    public function repairSt($id)
    {
        $item = DataBarang::findOrFail($id);
        return view('pages.teknisi.repair.st_repair',
        compact('item'));
    }

    public function status($id)
    {
        $item = DataBarang::findOrFail($id);
        $item->status = $item->status === '0' ? '1' : '0';
        $item->save();
        return back();
    }

    public function ket(Request $request,$id)
    {
        $item = DataBarang::findOrFail($id);
        $item->ket = $request->ket;
        $item->save();
        return back();
    }

    public function fetch($id)
    {
        $data = InputPekerjaan::where('id', $id)->first();
        return response()->json($data);
    }

    public function deleteI($id)
    {
        $item = InputPekerjaan::findOrfail($id);
        $item->delete();
        return back()->with('success', 'Data berhasil di hapus');
    }
}
