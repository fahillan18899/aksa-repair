<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
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
            'id_ruangan' => 'required',
            'ruangan_alat' => 'required',
            'ruangan' => 'required',
            'kepala_ruangan' => 'required',
            'kode_rs' => 'required',
        ]);

        $lokasi_alat = $request->ruangan_alat . ',' . $request->ruangan;


        Ruangan::create([
            'id_ruangan' => $request->id_ruangan,
            'ruangan_alat' => $request->ruangan_alat,
            'ruangan' => $request->ruangan,
            'kepala_ruangan' => $request->kepala_ruangan,
            'lokasi_alat' => $lokasi_alat,
            'kode_rs' => $request->kode_rs,
        ]);



        return redirect('/dashboard/ppm/data_kelengkapan')->with('message', 'Your account is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruangan $ruangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($ruangan)
    {
        $item = Ruangan::where('id_ruangan',  $ruangan)->first();

        $item->delete();
        return redirect('/dashboard/ppm/data_kelengkapan');
    }
}
