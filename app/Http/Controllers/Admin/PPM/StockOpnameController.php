<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\HistoryStockOpname;
use App\Models\StockOpname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockOpnameController extends Controller
{
    public function index()
    {
        $items = StockOpname::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.stock_opname.index',
            [
                'items' => $items,
            ]);
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
            'tanggal_masuk' => 'required',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        $request['stock'] = $request['jumlah_masuk'];
        StockOpname::create($request->post());

        return redirect()->route('stock_opname.index')
            ->with('success', 'Data Berhasil Di Tambahkan.');
    }

    public function edit($id)
    {
        $item = StockOpname::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.stock_opname.update',
        compact('item'));
    }

    public function update(Request $request, StockOpname $stock_opname)
    {
        $request->validate([
            'nama' => '',
            'type' => '',
            'jumlah_masuk' => '',
            'tanggal_masuk' => '',
        ]);

        $request['stock'] = $request['jumlah_masuk'];
        $stock_opname->fill($request->post())->save();

        return redirect()->route('stock_opname.index')
            ->with('success', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $item = StockOpname::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/stock_opname')->with('success', 'Data Berhasil Di Hapus');
    }
}
