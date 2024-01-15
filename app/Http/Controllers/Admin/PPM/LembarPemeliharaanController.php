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
        return view('pages.admin.PPM.lembar_pemeliharaan.index', [
            'lembarPemeliharaans' => $lembarPemeliharaans,
            'teknisis' => $teknisis,
            'alats' => $alats,
        ]);
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
            'catatan1' => '',
            'menyiapkan_alat_dan_bahan' => '',
            'catatan2' => '',
            'alat_pelindung_diri' => '',
            'catatan3' => '',
            'mengoprasikan_alat_kalibrasi' => '',
            'catatan4' => '',
            'ktd' => '',
            'catatan5' => '',
            'mengoprasikan_alat' => '',
            'catatan6' => '',
            'identifikasi_bahaya' => '',
            'catatan7' => '',
            'badan_selungkup1' => '',
            'catatan8' => '',
            'badan_selungkup2' => '',
            'catatan9' => '',
            'alat_sistem_interlock1' => '',
            'catatan10' => '',
            'alat_sistem_interlock2' => '',
            'catatan11' => '',
            'kabel_kelenturan1' => '',
            'catatan12' => '',
            'kabel_kelenturan2' => '',
            'catatan13' => '',
            'sistem_pengunci1' => '',
            'catatan14' => '',
            'sistem_pengunci2' => '',
            'catatan15' => '',
            'tombol_saklar1' => '',
            'catatan16' => '',
            'tombol_saklar2' => '',
            'catatan17' => '',
            'label_penandaan1' => '',
            'catatan18' => '',
            'label_penandaan2' => '',
            'catatan19' => '',
            'display_layar1' => '',
            'catatan20' => '',
            'display_layar2' => '',
            'catatan21' => '',
            'aksesoris1' => '',
            'catatan22' => '',
            'aksesoris2' => '',
            'catatan23' => '',
            'indikator_bunyi1' => '',
            'catatan24' => '',
            'indikator_bunyi2' => '',
            'catatan25' => '',
            'pembersihan' => '',
            'catatan26' => '',
            'pengencangan_bagian_alat' => '',
            'catatan27' => '',
            'pelumasan' => '',
            'catatan28' => '',
            'kalibrasi_berkala' => '',
            'catatan29' => '',
            'penggantian_bahan_habis_pakai' => '',
            'catatan30' => '',
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


    public function edit($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        return view('pages.admin.PPM.lembar_pemeliharaan.index', compact('lembarPemeliharaan'));
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

    public function cetak($id)
    {
        $item = LembarPemeliharaan::where('id_ppm', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.lembar_pemeliharaan.cetak_pemeliharaan', compact('item'));
    }
}
