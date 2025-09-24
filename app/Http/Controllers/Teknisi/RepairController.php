<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use App\Models\InputPekerjaan;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index()
    {
        $item = DataBarang::all();
        $data = InputPekerjaan::all();
        return view('pages.teknisi.repair.index', 
        compact('item', 'data'));
    }

    public function post(Request $request)
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
            'merek'          => 'required',
            'type'           => 'required',
            'no_seri'        => 'required',
            'kerusakan_alat' => 'required',
            'instansi'       => 'required',
        ]);

        $item = DataBarang::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.data.repair')
        ->with('success', 'Data berhasil di ubah');
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

    public function delete($id)
    {
        $item = DataBarang::findOrFail($id);
        $item->delete();
        return redirect()->route('teknisi.data.repair')
        ->with('success', 'Data berhasil di hapus');
    }

    public function deleteI($id)
    {
        $item = InputPekerjaan::findOrfail($id);
        $item->delete();
        return redirect()->route('teknisi.data.repair')
        ->with('success', 'Data berhasil di hapus');
    }
}
