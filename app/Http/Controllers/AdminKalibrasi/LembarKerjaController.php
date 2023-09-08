<?php

namespace App\Http\Controllers\AdminKalibrasi;

use App\Http\Controllers\Controller;
use App\Models\Kalibrasi\AlatUkur;
use App\Models\LembarKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LembarKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita_acara = AlatUkur::all();
        return view('pages.kalibrasi.admin.lembar_kerja.index', [
            'berita_acara' => $berita_acara
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
        $data =  $request->validate([
            'nama_instansi' => '',
            'tempat_kalibrasi' => '',
            'tanggal' => '',
            'nama_petugas' => '',
            'rentang_ukur' => '',
            'milik' => '',
            'merek_1' => '',
            'merek_2' => '',
            'merek_3' => '',
            'merek_4' => '',
            'tipe_1' => '',
            'tipe_2' => '',
            'tipe_3' => '',
            'tipe_4' => '',
            'no_seri_1' => '',
            'no_seri_2' => '',
            'no_seri_3' => '',
            'no_seri_4' => '',
            'tertelusur_1' => '',
            'tertelusur_2' => '',
            'tertelusur_3' => '',
            'tertelusur_4' => '',
            'nama_alat' => '',
            'tipe' => '',
            'no_seri' => '',
            'resolusi' => '',
            'suhu_1' => '',
            'suhu_2' => '',
            'kelembapan_1' => '',
            'kelembapan_2' => '',
            'hasil_pemeriksaan_fisik_1' => '',
            'hasil_pemeriksaan_fungsi_1' => '',
            'keterangan_1' => '',
            'hasil_pemeriksaan_fisik_2' => '',
            'hasil_pemeriksaan_fungsi_2' => '',
            'keterangan_2' => '',
            'hasil_pemeriksaan_fisik_3' => '',
            'hasil_pemeriksaan_fungsi_3' => '',
            'keterangan_3' => '',
            'hasil_pemeriksaan_fisik_4' => '',
            'hasil_pemeriksaan_fungsi_4' => '',
            'keterangan_4' => '',
            'hasil_pemeriksaan_fisik_5' => '',
            'hasil_pemeriksaan_fungsi_5' => '',
            'keterangan_5' => '',
            'hasil_pemeriksaan_fisik_6' => '',
            'hasil_pemeriksaan_fungsi_6' => '',
            'keterangan_6' => '',
            'hasil_pemeriksaan_fisik_7' => '',
            'hasil_pemeriksaan_fungsi_7' => '',
            'keterangan_7' => '',
            'hasil_pemeriksaan_fisik_8' => '',
            'hasil_pemeriksaan_fungsi_8' => '',
            'keterangan_8' => '',
            'hasil_pemeriksaan_fisik_9' => '',
            'hasil_pemeriksaan_fungsi_9' => '',
            'keterangan_9' => '',
            'hasil_pemeriksaan_fisik_10' => '',
            'hasil_pemeriksaan_fungsi_10' => '',
            'keterangan_10' => '',
            'hasil_pemeriksaan_fisik_11' => '',
            'hasil_pemeriksaan_fungsi_11' => '',
            'keterangan_11' => '',
            'hasil_pemeriksaan_fisik_12' => '',
            'hasil_pemeriksaan_fungsi_12' => '',
            'keterangan_12' => '',

            'pengukuran_titik_50_1' => '',
            'pengukuran_titik_50_2' => '',
            'pengukuran_titik_50_3' => '',
            'pengukuran_titik_50_4' => '',
            'pengukuran_titik_50_5' => '',
            'pengukuran_titik_50_6' => '',
            'pengukuran_titik_100_1' => '',
            'pengukuran_titik_100_2' => '',
            'pengukuran_titik_100_3' => '',
            'pengukuran_titik_100_4' => '',
            'pengukuran_titik_100_5' => '',
            'pengukuran_titik_100_6' => '',
            'pengukuran_titik_150_1' => '',
            'pengukuran_titik_150_2' => '',
            'pengukuran_titik_150_3' => '',
            'pengukuran_titik_150_4' => '',
            'pengukuran_titik_150_5' => '',
            'pengukuran_titik_150_6' => '',
            'pengukuran_titik_200_1' => '',
            'pengukuran_titik_200_2' => '',
            'pengukuran_titik_200_3' => '',
            'pengukuran_titik_200_4' => '',
            'pengukuran_titik_200_5' => '',
            'pengukuran_titik_200_6' => '',
            'pengukuran_titik_250_1' => '',
            'pengukuran_titik_250_2' => '',
            'pengukuran_titik_250_3' => '',
            'pengukuran_titik_250_4' => '',
            'pengukuran_titik_250_5' => '',
            'pengukuran_titik_250_6' => '',
            /**Laju buang cepat */
            'pengukuran_setting_mmhg_1' => '',
            'pengukuran_setting_mmhg_2' => '',
            'pengukuran_setting_mmhg_3' => '',
            'pengukuran_setting_mmhg_4' => '',
            'pengukuran_setting_mmhg_5' => '',
            'pengukuran_setting_mmhg_6' => '',
            /**Akurasi Tekanan */
            'pembacaan_alat_naik_0_1' => '',
            'pembacaan_alat_naik_0_2' => '',
            'pembacaan_alat_naik_0_3' => '',
            'pembacaan_alat_naik_0_4' => '',
            'pembacaan_alat_naik_0_5' => '',
            'pembacaan_alat_naik_0_6' => '',
            'pembacaan_alat_naik_50_1' => '',
            'pembacaan_alat_naik_50_2' => '',
            'pembacaan_alat_naik_50_3' => '',
            'pembacaan_alat_naik_50_4' => '',
            'pembacaan_alat_naik_50_5' => '',
            'pembacaan_alat_naik_50_6' => '',
            'pembacaan_alat_naik_100_1' => '',
            'pembacaan_alat_naik_100_2' => '',
            'pembacaan_alat_naik_100_3' => '',
            'pembacaan_alat_naik_100_4' => '',
            'pembacaan_alat_naik_100_5' => '',
            'pembacaan_alat_naik_100_6' => '',
            'pembacaan_alat_naik_150_1' => '',
            'pembacaan_alat_naik_150_2' => '',
            'pembacaan_alat_naik_150_3' => '',
            'pembacaan_alat_naik_150_4' => '',
            'pembacaan_alat_naik_150_5' => '',
            'pembacaan_alat_naik_150_6' => '',
            'pembacaan_alat_naik_200_1' => '',
            'pembacaan_alat_naik_200_2' => '',
            'pembacaan_alat_naik_200_3' => '',
            'pembacaan_alat_naik_200_4' => '',
            'pembacaan_alat_naik_200_5' => '',
            'pembacaan_alat_naik_200_6' => '',
            'pembacaan_alat_naik_250_1' => '',
            'pembacaan_alat_naik_250_2' => '',
            'pembacaan_alat_naik_250_3' => '',
            'pembacaan_alat_naik_250_4' => '',
            'pembacaan_alat_naik_250_5' => '',
            'pembacaan_alat_naik_250_6' => '',


            'pembacaan_alat_turun_0_1' => '',
            'pembacaan_alat_turun_0_2' => '',
            'pembacaan_alat_turun_0_3' => '',
            'pembacaan_alat_turun_0_4' => '',
            'pembacaan_alat_turun_0_5' => '',
            'pembacaan_alat_turun_0_6' => '',
            'pembacaan_alat_turun_50_1' => '',
            'pembacaan_alat_turun_50_2' => '',
            'pembacaan_alat_turun_50_3' => '',
            'pembacaan_alat_turun_50_4' => '',
            'pembacaan_alat_turun_50_5' => '',
            'pembacaan_alat_turun_50_6' => '',
            'pembacaan_alat_turun_100_1' => '',
            'pembacaan_alat_turun_100_2' => '',
            'pembacaan_alat_turun_100_3' => '',
            'pembacaan_alat_turun_100_4' => '',
            'pembacaan_alat_turun_100_5' => '',
            'pembacaan_alat_turun_100_6' => '',
            'pembacaan_alat_turun_150_1' => '',
            'pembacaan_alat_turun_150_2' => '',
            'pembacaan_alat_turun_150_3' => '',
            'pembacaan_alat_turun_150_4' => '',
            'pembacaan_alat_turun_150_5' => '',
            'pembacaan_alat_turun_150_6' => '',
            'pembacaan_alat_turun_200_1' => '',
            'pembacaan_alat_turun_200_2' => '',
            'pembacaan_alat_turun_200_3' => '',
            'pembacaan_alat_turun_200_4' => '',
            'pembacaan_alat_turun_200_5' => '',
            'pembacaan_alat_turun_200_6' => '',
            'pembacaan_alat_turun_250_1' => '',
            'pembacaan_alat_turun_250_2' => '',
            'pembacaan_alat_turun_250_3' => '',
            'pembacaan_alat_turun_250_4' => '',
            'pembacaan_alat_turun_250_5' => '',
            'pembacaan_alat_turun_250_6' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;

        LembarKerja::create($data);


        return redirect()->route('lembar_kerja.index')
        ->with('success', 'Data Registrasi Alat Berhasil Di Tambahkan');
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
