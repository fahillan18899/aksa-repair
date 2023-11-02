<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlatController extends Controller
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
            'id_alat' => 'required',
            'nama_alat' => 'required',
            'kode_rs' => '',
        ]);

        Alat::create([
            'id_alat' => $request->id_alat,
            'nama_alat' => $request->nama_alat,
            'kode_rs' => Auth::user()->kode_rs,
        ]);

        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function show(Alat $alat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Alat::where('id_alat', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.data_kelengkapan.update_alat', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alat $alat)
    {
        $request->validate([
            'id_alat' => '',
            'nama_alat' => '',
        ]);

        $alat->fill($request->post())->save();


        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('success', 'Data Alat Berhasil di Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Alat::where('id_alat', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        

        $item->delete();
        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Alat Berhasil Di Hapus.');
    }
}
