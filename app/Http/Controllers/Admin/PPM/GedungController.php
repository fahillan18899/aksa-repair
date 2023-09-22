<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\Gedung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $data = $request->validate([
            'id_gedung' => 'required',
            'nama_gedung' => 'required',
        ]);

        Gedung::create([
            'id_gedung' => $request->id_gedung,
            'nama_gedung' => $request->nama_gedung,
            'kode_rs'  => Auth::user()->kode_rs,
        ]);

        return redirect('/dashboard/ppm/data_kelengkapan')->with('message', 'Data Gedung Berhasil di Tambahkan.');
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
    public function edit($gedung)
    {
        $item = Gedung::where('id_gedung', $gedung)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.data_kelengkapan.update_gedung', compact('item'));
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
        $request->validate([
            'id_alat' => '',
            'nama_alat' => '',
        ]);

        $gedung->fill($request->post())->save();


        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('success', 'Data Gedung Berhasil di Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item = Gedung::where('id_gedung', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Gedung Berhasil Di Hapus.');
    }
}
