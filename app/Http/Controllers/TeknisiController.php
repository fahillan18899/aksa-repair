<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeknisiController extends Controller
{
    public function index()
    {
        $items = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.kalibrasi.admin.teknisi.index', compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_teknisi' => 'required',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;

        Teknisi::create($data);

        return redirect('/kalibrasi/teknisi_k')
            ->with('message', 'Data Teknisi Berhasil di Tambahkan.');
    }

    public function edit($teknisi)
    {
        $item = Teknisi::where('id', $teknisi)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.kalibrasi.admin.teknisi.edit', compact('item'));
    }

    public function update(Request $request, $teknisi)
    {
        $data = $request->validate([
            'nama_teknisi' => 'required',
        ]);

        $registrasi = Teknisi::findOrFail($teknisi);
        $registrasi->update($data);

        return redirect('/kalibrasi/teknisi_k')
            ->with('success', 'Data Teknisi Berhasil Tambahkan.');
    }

    public function destroy($id)
    {

        $item = Teknisi::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/kalibrasi/teknisi_k')->with('success', 'Data Teknisi Berhasil Di Hapus.');
    }
}
