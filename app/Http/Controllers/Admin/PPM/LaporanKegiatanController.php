<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\LembarPemeliharaan;
use Illuminate\Support\Facades\Auth;

class LaporanKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regsitrasi          = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $unregsitrasi        = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $lembarpemeliharaan  = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->get();


        return view('pages.admin.PPM.laporan_kegiatan.index', [
            
            'regsitrasi'         => $regsitrasi, 
            'unregsitrasi'       => $unregsitrasi, 
            'lembarpemeliharaan' => $lembarpemeliharaan, 
        
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
