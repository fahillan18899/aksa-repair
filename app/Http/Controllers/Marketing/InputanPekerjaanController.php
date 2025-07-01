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
            'nama_alat' => 'required',
            'instansi' => 'required',
        ]);
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
