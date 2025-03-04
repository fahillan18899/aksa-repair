<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Pesanan;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {

        $kodeRs_ = Auth::user()->kode_rs;
        $items = DB::table('pesanans')->where('kode_rs', $kodeRs_)->get();
        return view('pages.admin.PPM.pesanan.index',compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'unique:pesanans',
            'nama_req' => '',
            'merek_req' => '',
            'type_req' => '',
            'sn_req' => '',
            'kerusakan_req' => '',
            'pelapor_req' => '',
            'tanggal_req' => '',
            'kode_rs' => '',
        ], ['id.unique' => 'Aset Sudah Dilaporkan']);

        Pesanan::create(array_merge($data, ['kode_rs' => auth()->user()->kode_rs]));
        session()->flash('success', 'Data Berhasil Terkirim');
        return redirect('/dashboard/ppm/pesanan');
    }

    public function destroy($id)
    {
        $item = Pesanan::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/pesanan')->with('success', 'Aset Telah Selesai Diperbaiki.');
    }

    public function getPesanan($id)
    {
      $pesanan = Registrasi::where("id_aset", $id)->get();
      return json_encode($pesanan);
    }

    // public function create()
    // {
    //     //
    // }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit($id)
    // {
    //     //
    // }
}
