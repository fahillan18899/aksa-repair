<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\PerbaikanUnregistrasi;
use \App\Models\PengirimanUnregistrasi;
use \App\Models\PengembalianUnregistrasi;
use \App\Models\PenghapusanUnregistrasi;

class AsetUnregistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perbaikan     = PerbaikanUnregistrasi::all();
        $pengiriman    = PengirimanUnregistrasi::all();
        $pengembalian  = PengembalianUnregistrasi::all();
        $penghapusan   = PenghapusanUnregistrasi::all();

        return view('pages.admin.ppm.aset_unregistrasi.index', [
            
            'perbaikan'    => $perbaikan,
            'pengiriman'   => $pengiriman,
            'pengembalian' => $pengembalian,
            'penghapusan'  => $penghapusan,
        
        ]);
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
