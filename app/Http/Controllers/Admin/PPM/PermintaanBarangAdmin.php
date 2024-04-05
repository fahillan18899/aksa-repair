<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PermintaanBarang;
use Illuminate\Http\Request;

class PermintaanBarangAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PermintaanBarang::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.permintaan_barang_admin.index', ['items' => $items]);
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
        //
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
        $item = PermintaanBarang::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.permintaan_barang_admin.update', [
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
    public function update(Request $request,  PermintaanBarang $permintaan_barang_admin)
    {
        $request->validate([
            'nama'   => '',
            'merek'  => '',
            'type'   => '',
            'jumlah' => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        $permintaan_barang_admin->fill($request->post())->save();


        return redirect()->route('permintaan_barang_admin.index')
        ->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PermintaanBarang::where('id',  $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect('/dashboard/ppm/permintaan_barang_admin')->with('success', 'Data Berhasil Di Hapus');;
    }
}
