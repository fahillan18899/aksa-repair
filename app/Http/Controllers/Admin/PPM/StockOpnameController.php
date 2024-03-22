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
        $items = StockOpname::all();
        
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
            'jumlah_sekarang' => 'numeric',
            'jumlah_keluar' => 'numeric',
            'lokasi_pemakaian' => '',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        $request['jumlah_sekarang'] = $request['jumlah_masuk'];
        $request['stock'] = $request->jumlah_sekarang - $request->jumlah_keluar;
        StockOpname::create($request->post());

        $stock_opnames = StockOpname::latest()->first();
        
        $hasil = $stock_opnames->jumlah_sekarang - $stock_opnames->jumlah_keluar;
        HistoryStockOpname::create([
            'sparepart_id' => $stock_opnames->id,
            'total_sparepart' => $hasil
        ]);
        
        return redirect()->route('stock_opname.index')
        ->with('success', 'Data Berhasil Di Tambahkan.');
    }


    public function edit($id)
    {
        $item = StockOpname::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $selisih_jumlah_terakhir  = DB::table('history_stock_opnames')->select('history_stock_opnames.total_sparepart AS selisih_jumlah_masuk_keluar_terakhir')->join('stock_opnames', 'history_stock_opnames.sparepart_id', '=', 'stock_opnames.id')->where('stock_opnames.id', '=', $id)->orderByDesc('history_stock_opnames.created_at')->limit(1)->first();
        
        return view('pages.admin.PPM.stock_opname.update', [
            'item' => $item,
            'selisih_jumlah_terakhir' => $selisih_jumlah_terakhir
        ]);
    }

    public function update(Request $request,  StockOpname $stock_opname)
    {
        $request->validate([
            'nama' => '',
            'type' => '',
            'jumlah_masuk' => '',
            'jumlah_sekarang' => '',
            'lokasi_pemakaian' => '',
            'jumlah_keluar' => '',
            'tanggal_masuk' => '',
            'tanggal_keluar' => '',
        ]);
        
        $request['stock'] = $request->jumlah_sekarang - $request->jumlah_keluar;
        $stock_opname->fill($request->post())->save();

        $stock_opnames = StockOpname::find($stock_opname->id);
        $hasil = $stock_opnames->jumlah_sekarang - $stock_opnames->jumlah_keluar;
        
        HistoryStockOpname::create([
            'sparepart_id' => $stock_opnames->id,
            'total_sparepart' => $hasil
        ]);

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
