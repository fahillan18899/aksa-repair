<?php

namespace App\Http\Controllers\AdminKalibrasi;

use App\Http\Controllers\Controller;
use App\Models\Kalibrasi\AlatUkur;
use App\Models\Kalibrasi\BeritaAcara;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = AlatUkur::all();
        return view('pages.kalibrasi.admin.pesanan.index', [
            'pesanan' => $pesanan
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
        // Validate the request data (you should add more validation rules as needed)
        $validatedData = $request->validate([
            'kepada' => 'required|string',
            'nama.*' => 'required|string',
            'qyt.*' => 'required|integer',
            'harga.*' => 'required|string',
        ]);

        
        // Loop through the form data to insert into the database
        foreach ($validatedData['nama'] as $index => $nama) {
            $pesanan = new BeritaAcara();
            $pesanan->kepada = $validatedData['kepada'];
            $pesanan->nama = $nama;
            $pesanan->qyt = $validatedData['qyt'][$index];
            $pesanan->harga = $validatedData['harga'][$index];
            $pesanan->save();
        }

        // Redirect or return a response as needed
        // For example, you can redirect to a success page
        return redirect('/kalibrasi/pesanan')->with('success', 'OK');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'kepada' => '',
    //         'nama' => '',
    //         'qyt' => '',
    //         'harga' => '',
    //     ]);

    //     BeritaAcara::create($data);


    //     return redirect()->route('pesanan.index')
    //         ->with('success', 'Data Registrasi Alat Berhasil Di Tambahkan');
    // }

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
