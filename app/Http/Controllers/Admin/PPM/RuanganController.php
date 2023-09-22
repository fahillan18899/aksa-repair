<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'kode_rs' => Auth::user()->kode_rs,
        ]);



        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('message', 'Data Berhasil Tambahkan.');
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
    public function edit($ruangan)
    {
        $item = Ruangan::where('id_ruangan', $ruangan)->where('kode_rs', Auth::user()->kode_rs)->first();
        $gedungs = Gedung::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.data_kelengkapan.update_ruangan', [
            'item' => $item,
            'teknisis' => $teknisis,
            'gedungs' => $gedungs,
        ]);
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
        $lokasi_alat = $request->ruangan_alat . ',' . $request->ruangan;
        $request->validate([
            'id_ruangan' => '',
            'ruangan_alat' => '',
            'ruangan' => '',
            'lokasi_alat' => $lokasi_alat,
        ]);

        $ruangan->fill($request->post())->save();


        return redirect('/dashboard/ppm/data_kelengkapan')
        ->with('success', 'Data Berhasil Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Ruangan::where('id_ruangan', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect('/dashboard/ppm/data_kelengkapan')->with('success', 'Data Ruangan Berhasil Di Hapus.');
    }
}
