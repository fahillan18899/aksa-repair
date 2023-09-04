<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Teknisi;
use Illuminate\Http\Request;

class TeknisiController extends Controller
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
            'id_teknisi' => 'required',
            'nama_teknisi' => 'required',
            'kode_rs' => 'required',
        ]);

        Teknisi::create([
            'id_teknisi' => $request->id_teknisi,
            'nama_teknisi' => $request->nama_teknisi,
            'kode_rs' => $request->kode_rs,
        ]);

        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('message', 'Data Teknisi Berhasil di Tambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teknisi  $teknisi
     * @return \Illuminate\Http\Response
     */
    public function show(Teknisi $teknisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teknisi  $teknisi
     * @return \Illuminate\Http\Response
     */
    public function edit($teknisi)
    {
        $item = Teknisi::where('id_teknisi', $teknisi)->first();
        return view('pages.admin.ppm.data_kelengkapan.update_teknisi', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teknisi  $teknisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teknisi $teknisi)
    {
        $request->validate([
            'id_teknisi' => '',
            'nama_teknisi' => '',
            'kode_rs' => '',
        ]);

        $teknisi->fill($request->post())->save();


        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('success', 'Data Teknisi Berhasil Tambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teknisi  $teknisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Teknisi::where('id_teknisi',  $id)->first();

        $item->delete();
        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Teknisi Berhasil Di Hapus.');
    }
}
