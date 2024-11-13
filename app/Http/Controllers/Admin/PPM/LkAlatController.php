<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\LkAlat;
use Illuminate\Http\Request;

class LkAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.PPM.lk_alat.index');
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
        $data =  $request->validate([
            'id_alat' => '',
            'ruangan' => '',
            'operator_alat' => '',
            'alat' => '',
            'merek_tipe' => '',
            'no_seri' => '',
            'tanggal' => '',
            'pelaksana' => '',
            'ukur_merek1' => '',
            'ukur_tipe1' => '',
            'ukur_noseri1' => '',
            'ukur_merek2' => '',
            'ukur_tipe2' => '',
            'ukur_noseri2' => '',
            'ukur_merek3' => '',
            'ukur_tipe3' => '',
            'ukur_noseri3' => '',
            'ukur_merek4' => '',
            'ukur_tipe4' => '',
            'ukur_noseri4' => '',
            'suhu' => '',
            'kelembapan' => '',
            'fisik_fungsi_1' => '',
            'keterangan_1' => '',
            'fisik_fungsi_2' => '',
            'keterangan_2' => '',
            'fisik_fungsi_3' => '',
            'keterangan_3' => '',
            'fisik_fungsi_4' => '',
            'keterangan_4' => '',
            'fisik_fungsi_5' => '',
            'keterangan_5' => '',
            'fisik_fungsi_6' => '',
            'keterangan_6' => '',
            'fisik_fungsi_7' => '',
            'keterangan_7' => '',
            'fisik_fungsi_8' => '',
            'keterangan_8' => '',
            'fisik_fungsi_9' => '',
            'keterangan_9' => '',
            'fisik_fungsi_10' => '',
            'keterangan_10' => '',
            'fisik_fungsi_11' => '',
            'keterangan_11' => '',
            'fisik_fungsi_12' => '',
            'keterangan_12' => '',
            'fisik_fungsi_13' => '',
            'keterangan_13' => '',
            'listrik_1' => '',
            'listrik_2' => '',
            'listrik_3' => '',
            'listrik_4' => '',
            'jenis_gas' => '',
            'seting_alat_1' => '',
            'seting_alat_2' => '',
            'seting_alat_3' => '',
            'seting_alat_4' => '',
            'seting_alat_5' => '',
            'seting_alat_6' => '',
            'seting_alat_7' => '',
            'terukur_1' => '',
            'terukur_2' => '',
            'terukur_3' => '',
            'terukur_4' => '',
            'terukur_5' => '',
            'terukur_6' => '',
            'terukur_7' => '',
            'kesimpulan_fisik_fungsi' => '',
            'kesimpulan_listrik' => '',
            'kesimpulan_kinerja' => '',
            'catatan' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        LkAlat::create($data);
        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
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
