<?php

namespace App\Http\Controllers\User\PPM;

use App\Http\Controllers\Controller;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasi = Registrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs',Auth::user()->kode_rs)->count();
        return view('pages.user.dashboard.index',
        [
            'registrasi' => $registrasi,
            'perbaikanRegistrasi' => $perbaikanRegistrasi,
            'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
            'lembarPemeliharaan' => $lembarPemeliharaan
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
