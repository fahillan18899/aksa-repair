<?php

namespace App\Http\Controllers\Marketing;

use App\Models\Instansi;
use Illuminate\Http\Request;
use App\Models\InputPekerjaan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InputanPekerjaanController extends Controller
{
    public function index() 
    {
        $user = Auth::user()->username;
        $item = InputPekerjaan::where('user', $user)->get();
        $instansis = Instansi::all();
        return view('pages.marketing.inputan_pekerjaan.index',
        compact('item', 'instansis'));
    }

    public function instansi() 
    {
        $item = Instansi::all();
        return view('pages.marketing.inputan_pekerjaan.instansi',
        compact('item'));
    }

    public function store(Request $request)
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
            'user'           => 'nullable',
        ]);

        // Buat foto
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();
            //Simpan ke storage/app/foto
            $path = $file->storeAs('public/foto',$fileName);
            $validated['foto'] = 'foto/'.$fileName;
        } 
        else { $validated['foto'] = null; }

        //Buat no urut
        $count = InputPekerjaan::count() + 1;
        $user = Auth::user()->rs_divisi;
        $cont1 =  str_pad($count, 4, '0', STR_PAD_LEFT);
        $noMrk = $user . '/' . $cont1;
        $validated['no_urut']= $noMrk;

        InputPekerjaan::create($validated);
        return back()->with('success', 'Data berhasil disimpan');
    }

    public function postIns(Request $request)
    {
        $validated = $request->validate([
            'instansi'        => 'nullable',
        ]);

        Instansi::create($validated);
        return back()->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $item = InputPekerjaan::findOrFail($id);
        return view('pages.marketing.inputan_pekerjaan.edit',
        compact('item'));
    }

    public function editIns($id)
    {
        $item = Instansi::findOrFail($id);
        return view('pages.marketing.inputan_pekerjaan.edit_ins',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_alat' => 'nullable',
            'merek'     => 'nullable',
            'type'      => 'nullable',
            'no_seri'   => 'nullable',
            'instansi'  => 'nullable',
            'kerusakan' => 'nullable',
            'foto'      => 'nullable',
            'user'      => 'nullable',
        ]);

        if($request->hasFile('foto')){
            //Buat Foto
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();
             //Simpan ke storage foto
            $path = $file->storeAs('public/foto',$fileName);
            $validate['foto'] = 'foto/'.$fileName;
        }
        else { $validate['foto'] = null; }

        $item = InputPekerjaan::findOrFail($id);
        $item->update($validate);
        return redirect()->route('marketing.input_pekerjaan.index')
        ->with('success', 'Data berhasil di ubah');
    }

    public function updateIns(Request $request, $id)
    {
        $validate = $request->validate([
         'instansi'        => 'nullable',  
        ]);

        $item = Instansi::findOrFail($id);
        $item->update($validate);
        return redirect()->route('marketing.input_pekerjaan.index')
        ->with('success', 'Data berhasil di ubah');
    }

    public function destroy($id)
    {
        $item = InputPekerjaan::findOrFail($id);
        //Hapus file di storage
        if(Storage::exists('public/' . $item->foto)){
            Storage::delete('public/' . $item->foto);
        }
        $item->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }

    public function deleteIns($id)
    {
        $item = Instansi::findOrFail($id);
        $item->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
