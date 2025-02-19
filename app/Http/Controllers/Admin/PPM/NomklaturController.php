<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Nomklatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NomklaturController extends Controller
{
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $data = $request->validate([
            'id_nomklatur' => '',
            'nama_nomklatur' => '',
            'kode_nomklatur' => '',
            'kode_rs' => '',
        ]);

        Nomklatur::create(array_merge($data, ['kode_rs' => auth()->user()->kode_rs]));
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Nomklatur Berhasil Ditambahkan.');
                                        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Nomklatur::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $nomklatur = Nomklatur::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.data_kelengkapan.update_nomklatur',

        compact( 'item','nomklatur',));
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
    $data = $request->validate([
            'id_nomklatur' => '',
            'nama_nomklatur' => '',
            'kode_nomklatur' => '',
        ]);

        $nomklatur = Nomklatur::findOrFail($id);
        $nomklatur->fill(array_merge($data))->save();

        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Alat Berhasil di Ubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Nomklatur::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect()->route('data_kelengkapan')
        ->with('success', 'Data Alat Berhasil Dihapus.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

      // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

}
