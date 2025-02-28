<?php

namespace App\Http\Controllers\Admin\PPM;

use Illuminate\Http\Request;
use App\Models\TambahDistributor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TambahDistributorController extends Controller
{
    public function index()
    {
        $items = TambahDistributor::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.tambah_distributor.index', compact('items'));
    }

    public function store(Request $request)
    {
        $data =  $request->validate([
            'kode_rs' => '',
            'nama_distributor_p' => '',
            'email_distributor_p' => '',
            'alamat_distributor_p' => '',
            'teknisi_distributor_p' => '',
            'telphone_distributor_p' => '',
            'telphone_teknisi_dis_p' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        TambahDistributor::create($data);
        return redirect('/dashboard/ppm/registrasi-aset')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function edit($id)
    {
        $item = TambahDistributor::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.tambah_distributor.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_distributor_p' => '',
            'email_distributor_p' => '',
            'alamat_distributor_p' => '',
            'teknisi_distributor_p' => '',
            'telphone_teknisi_dis_p' => '',
            'telphone_distributor_p' => '',
        ]);
        $data_item = TambahDistributor::findOrFail($id);
        $data_item->update($data);


        return redirect('/dashboard/ppm/tambah_distributor')
            ->with('success', 'Data Item Berhasil Ubah.');
    }

    public function destroy($id)
    {
        $item = TambahDistributor::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/tambah_distributor')->with('success', 'Data item Berhasil Di Hapus.');
    }
    
    // public function create()
    // {
    //     //
    // }

    
    // public function show($id)
    // {
    //     //
    // }
}
