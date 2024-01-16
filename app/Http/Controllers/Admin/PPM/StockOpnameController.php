<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\StockOpname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockOpnameController extends Controller
{
    public function index()
    {
        $items = StockOpname::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.stock_opname.index', ['items' => $items]);
    }

    public function create()
    {
        return view('pages.admin.PPM.stock_opname.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'type' => 'required',
            'jumlah_masuk' => 'required|numeric',
            'lokasi_pemakaian' => '',
            'jumlah_keluar' => 'numeric',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        $request['stock'] = $request->jumlah_masuk - $request->jumlah_keluar;
        StockOpname::create($request->post());


        return redirect()->route('stock_opname.index')
        ->with('success', 'Data Berhasil Di Tambahkan.');
    }


    public function edit($id)
    {
        $item = StockOpname::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.stock_opname.update', [
            'item' => $item,
        ]);
    }

    public function update(Request $request,  StockOpname $stock_opname)
    {
        $request->validate([
            'nama' => '',
            'type' => '',
            'jumlah_masuk' => '',
            'lokasi_pemakaian' => '',
            'jumlah_keluar' => '',
            'tanggal_masuk' => '',
            'tanggal_keluar' => '',
        ]);
        $request['stock'] = $request->jumlah_masuk - $request->jumlah_keluar;
        $stock_opname->fill($request->post())->save();


        return redirect()->route('stock_opname.index')
        ->with('success', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $item = StockOpname::where('id',  $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect('/dashboard/ppm/stock_opname')->with('success', 'Data Berhasil Di Hapus');;
    }
}
