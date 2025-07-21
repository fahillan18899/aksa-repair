<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\InputPekerjaan;
use Illuminate\Http\Request;

class InputanPekerjaanController extends Controller
{
    public function index() 
    {
        $item = InputPekerjaan::all();
        return view('pages.marketing.inputan_pekerjaan.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validated = $request->validate([
            'no_urut'        => 'nullable',
            'nama_alat'      => 'nullable',
            'merek'          => 'nullable',
            'type'           => 'nullable',
            'no_seri'        => 'nullable',
            'instansi'       => 'nullable',
            'kerusakan'      => 'nullable',
            'foto'           => 'nullable',
        ]);

        // Buat foto
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        //Simpan ke storage/app/foto
        $path = $file->storeAs('public/foto',$fileName);
        $validated['foto'] = 'foto/'.$fileName;

        //Buat no urut
        $count = InputPekerjaan::count() + 1;
        $noUrut = str_pad($count, 5, '0', STR_PAD_LEFT);
        $validated['no_urut']= $noUrut;
        


        InputPekerjaan::create($validated);
        return redirect()->route('marketing.data.inputanPekerjaan')
        ->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $item = InputPekerjaan::findOrFail($id);
        return view('pages.marketing.inputan_pekerjaan.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_alat' => 'required',
            'instansi' => 'required',
        ]);

        $item = InputPekerjaan::findOrFail($id);
        $item->update($validate);
        return redirect()->route('marketing.data.inputanPekerjaan')
        ->with('success', 'Data berhasil di ubah');
    }

    public function delete($id)
    {
        $item = InputPekerjaan::findOrFail($id);
        $item->delete();
        return redirect()->route('marketing.data.inputanPekerjaan')
        ->with('success', 'Data berhasil dihapus');
    }
}
