<?php

namespace App\Http\Controllers;

use App\Models\PemeliharaanAlat;
use Illuminate\Http\Request;

class PemeliharaanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.PPM.lembar_pemeliharaan.index');
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
     * @param  \App\Models\PemeliharaanAlat  $pemeliharaanAlat
     * @return \Illuminate\Http\Response
     */
    public function show(PemeliharaanAlat $pemeliharaanAlat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PemeliharaanAlat  $pemeliharaanAlat
     * @return \Illuminate\Http\Response
     */
    public function edit(PemeliharaanAlat $pemeliharaanAlat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PemeliharaanAlat  $pemeliharaanAlat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PemeliharaanAlat $pemeliharaanAlat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PemeliharaanAlat  $pemeliharaanAlat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PemeliharaanAlat $pemeliharaanAlat)
    {
        //
    }
}
