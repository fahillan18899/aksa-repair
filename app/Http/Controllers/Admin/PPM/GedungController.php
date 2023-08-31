<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Gedung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GedungController extends Controller
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
            'id_gedung' => 'required',
            'nama_gedung' => 'required',
            'kode_rs' => 'required',
        ]);

        Gedung::create([
            'id_gedung' => $request->id_gedung,
            'nama_gedung' => $request->nama_gedung,
            'kode_rs' => $request->kode_rs,
        ]);

        return redirect('/dashboard/ppm/data_kelengkapan')->with('message', 'Your account is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function show(Gedung $gedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function edit(Gedung $gedung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gedung $gedung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gedung::where('id_gedung',  $id)->first();

        $item->delete();
        return redirect('/dashboard/ppm/data_kelengkapan');
    }
}
