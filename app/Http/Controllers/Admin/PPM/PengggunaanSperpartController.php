<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\StockOpname;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PengggunaanSperpartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => '',
            'type' => '',
            'lokasi_pemakaian' => '',
            'jumlah_masuk' => '',
            'jumlah_sekarang' => '',
            'jumlah_keluar' => '',
            'tanggal_masuk' => '',
            'tanggal_keluar' => '',
            'harga_part' => '',
            'jumlah_harga_part' => '',
            'id_aset_part' => '',
            'nama_alat_pengguna_part' => '',
            'lokasi_alat_pengguna_part' => '',
        ]);

        $request['kode_rs'] = Auth::user()->kode_rs;
        $request['stock'] = $request->jumlah_sekarang - $request->jumlah_keluar;
        StockOpname::create($request->post());
        return redirect('/dashboard/ppm/stock_opname')
            ->with('message', 'Data Alat Berhasil di Tambahkan.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
