<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\StockOpname;
use Illuminate\Http\Request;

class StockOpnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = StockOpname::all();

        return view('pages.admin.ppm.stock_opname.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.ppm.stock_opname.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'type' => 'required',
            'jumlah_masuk' => 'required',
            'lokasi_pemakaian' => 'required',
            'jumlah_keluar' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
        ]);
        $request['stock'] = $request->jumlah_masuk - $request->jumlah_keluar;
        StockOpname::create($request->post());


        return redirect()->route('stock_opname.index')
        ->with('success', 'registrasi has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = StockOpname::where('id', $id)->first();
        return view('pages.admin.ppm.stock_opname.update', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        ->with('success', 'registrasi has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = StockOpname::where('id',  $id)->first();

        $item->delete();
        return redirect('/dashboard/ppm/stock_opname');
    }
}
