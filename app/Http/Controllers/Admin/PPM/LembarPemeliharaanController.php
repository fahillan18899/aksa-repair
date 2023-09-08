<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LembarPemeliharaan;
use App\Models\Alat;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Auth;

class LembarPemeliharaanController extends Controller
{

    public function index()
    {
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $lembarPemeliharaans = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.ppm.lembar_pemeliharaan.index', [
            'lembarPemeliharaans' => $lembarPemeliharaans,
            'teknisis' => $teknisis,
            'alats' => $alats,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([    
            'id_ppm' => '',
            'tanggal' => 'required|date',
            'kegiatan' => '',
            'engineer' => '',
            'id_aset' => '',
            'nama_alat' => '',
            'serial_number' => '',
            'merek' => '',
            'instalasi' => '',
            'tipe' => '',
            'ruangan' => '',
            'hand_hygiene' => '',
            'menyiapkan_alat_dan_bahan' => '',
            'alat_pelindung_diri' => '',
            'mengoprasikan_alat_kalibrasi' => '',
            'ktd' => '',
            'mengoprasikan_alat' => '',
            'identifikasi_bahaya' => '',
            'badan_selungkup1' => '',
            'badan_selungkup2' => '',
            'alat_sistem_interlock1' => '',
            'alat_sistem_interlock2' => '',
            'kabel_kelenturan1' => '',
            'kabel_kelenturan2' => '',
            'sistem_pengunci1' => '',
            'sistem_pengunci2' => '',
            'tombol_saklar1' => '',
            'tombol_saklar2' => '',
            'label_penandaan1' => '',
            'label_penandaan2' => '',
            'display_layar1' => '',
            'display_layar2' => '',
            'aksesoris1' => '',
            'aksesoris2' => '',
            'indikator_bunyi1' => '',
            'indikator_bunyi2' => '',
            'pembersihan' => '',
            'pengencangan_bagian_alat' => '',
            'pelumasan' => '',
            'kalibrasi_berkala' => '',
            'penggantian_bahan_habis_pakai' => '',
            'cek_alat' => '',
            'nama_sukucadang' => '',
            'volume' => '',
            'harga_satuan' => '',
            'jumlah_harga' => '',
            'evaluasi' => '',
            'status' => '',
            'status1' => '',
            'mulai_bekerja' => '',
            'selesai_kerja' => '',
            'durasi' => '',
            'user' => '',
            'engginer' => '',
            'kode_rs' => ''
        ]);

        $request['kode_rs'] = Auth::user()->kode_rs;
        LembarPemeliharaan::create($request->post());


        return redirect()->route('lembar_pemeliharaan.index')
        ->with('success', 'Lembar Pemeliharaan berhasil disimpan.');
    }

    public function show($id_ppm)
    {
       //
    }

    public function edit($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        return view('pages.admin.ppm.lembar_pemeliharaan.index', compact('lembarPemeliharaan'));
    }

    public function update(Request $request, $id_ppm)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kegiatan' => 'required|string',
        ]);

        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        $lembarPemeliharaan->update($request->all());

        return redirect()->route('lembar-pemeliharaan.index')
        ->with('success', 'Lembar Pemeliharaan berhasil diperbarui.');
    }

    public function destroy($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        $lembarPemeliharaan->delete();

        return redirect()->route('lembar-pemeliharaan.index')
        ->with('success', 'Lembar Pemeliharaan berhasil dihapus.');
    }
}
