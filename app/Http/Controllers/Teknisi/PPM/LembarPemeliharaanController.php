<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Models\Alat;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use App\Models\LembarPemeliharaan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LembarPemeliharaanController extends Controller
{
    public function index()
    {
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $lembarPemeliharaans = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.teknisi.lembar_pemeliharaan.index',
        compact('alats', 'teknisis', 'lembarPemeliharaans'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_ppm' => '',
            'tanggal' => 'required|date',
            'kegiatan' => '',
            'engineer' => 'max:50',
            'id_aset' => '',
            'nama_alat' => '',
            'serial_number' => '',
            'merek' => '',
            'tipe' => '',
            'ruangan' => '',
            'persiapan' => 'required|array',
            'persiapan.hand_hygiene' => 'required|string',
            'persiapan.menyiapkan_alat_dan_bahan' => 'required|string',
            'persiapan.alat_pelindung_diri' => 'required|string',
            'persiapan.mengoprasikan_alat_kalibrasi' => 'required|string',
            'persiapan.ktd' => 'required|string',
            'persiapan.mengoprasikan_alat' => 'required|string',
            'persiapan.identifikasi_bahaya' => 'required|string',
            'pemantauan' => 'required|array',
            'pemantauan.badan_selungkup1' => 'required|string',
            'pemantauan.catatan1' => 'nullable|string',
            'pemantauan.badan_selungkup2' => 'required|string',
            'pemantauan.catatan2' => 'nullable|string',
            'pemantauan.alat_sistem_interlock1' => 'required|string',
            'pemantauan.catatan3' => 'nullable|string',
            'pemantauan.alat_sistem_interlock2' => 'required|string',
            'pemantauan.catatan4' => 'nullable|string',
            'pemantauan.kabel_kelenturan1' => 'required|string',
            'pemantauan.catatan5' => 'nullable|string',
            'pemantauan.kabel_kelenturan2' => 'required|string',
            'pemantauan.catatan6' => 'nullable|string',
            'pemantauan.sistem_pengunci1' => 'required|string',
            'pemantauan.catatan7' => 'nullable|string',
            'pemantauan.sistem_pengunci2' => 'required|string',
            'pemantauan.catatan8' => 'nullable|string',
            'pemantauan.tombol_saklar1' => 'required|string',
            'pemantauan.catatan9' => 'nullable|string',
            'pemantauan.tombol_saklar2' => 'required|string',
            'pemantauan.catatan10' => 'nullable|string',
            'pemantauan.label_penandaan1' => 'required|string',
            'pemantauan.catatan11' => 'nullable|string',
            'pemantauan.label_penandaan2' => 'required|string',
            'pemantauan.catatan12' => 'nullable|string',
            'pemantauan.display_layar1' => 'required|string',
            'pemantauan.catatan13' => 'nullable|string',
            'pemantauan.display_layar2' => 'required|string',
            'pemantauan.catatan14' => 'nullable|string',
            'pemantauan.aksesoris1' => 'required|string',
            'pemantauan.catatan15' => 'nullable|string',
            'pemantauan.aksesoris2' => 'required|string',
            'pemantauan.catatan16' => 'nullable|string',
            'pemantauan.indikator_bunyi1' => 'required|string',
            'pemantauan.catatan17' => 'nullable|string',
            'pemantauan.indikator_bunyi2' => 'required|string',
            'pemantauan.catatan18' => 'nullable|string',
            'preverentif' => 'required|array',
            'preverentif.pembersihan' => 'required|string',
            'preverentif.pengencangan_bagian_alat' => 'required|string',
            'preverentif.pelumasan' => 'required|string',
            'preverentif.kalibrasi_berkala' => 'required|string',
            'preverentif.penggantian_bahan_habis_pakai' => 'required|string',
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
            'tanggal_selesai' => '',
            'user' => '',
            'engginer' => '',
            'kode_rs' => '',
        ]);
        $data['kode_rs'] = Auth::user()->kode_rs;
        $data['persiapan'] = json_encode($data['persiapan']);
        $data['pemantauan'] = json_encode($data['pemantauan']);
        $data['preverentif'] = json_encode($data['preverentif']);
        LembarPemeliharaan::create($data);

        return redirect('/dashboard_teknisi/lembar_pemeliharaan')->with('success', 'Lembar Pemeliharaan berhasil disimpan.');
    }

    public function edit($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);

        return view('pages.teknisi.lembar_pemeliharaan.index', compact('lembarPemeliharaan'));
    }

    public function update(Request $request, $id_ppm)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kegiatan' => 'required|string',
        ]);

        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        $lembarPemeliharaan->update($request->all());

        return redirect('/dashboard_teknisi/lembar_pemeliharaan')
            ->with('success', 'Lembar Pemeliharaan berhasil diperbarui.');
    }

    public function destroy($id_ppm)
    {
        $lembarPemeliharaan = LembarPemeliharaan::findOrFail($id_ppm);
        $lembarPemeliharaan->delete();

        return redirect('/dashboard_teknisi/lembar_pemeliharaan')
            ->with('success', 'Lembar Pemeliharaan berhasil dihapus.');
    }

    public function cetak($id)
    {
        $items = LembarPemeliharaan::where('id_ppm', $id)->where('kode_rs', Auth::user()->kode_rs)->get();
        foreach ($items as $item) {
            $item->persiapan = json_decode(trim($item->persiapan), true);
            if (is_string($item->persiapan)) {
                $item->persiapan = json_decode($item->persiapan, true);
            }
        
            $item->pemantauan = json_decode(trim($item->pemantauan), true);
            if (is_string($item->pemantauan)) {
                $item->pemantauan = json_decode($item->pemantauan, true);
            }
        
            // $item->preverentif = json_decode(trim($item->preverentif), true);
            // if (is_string($item->preverentif)) {
            //     $item->preverentif = json_decode($item->preverentif, true);
            // }
        }

        return view('pages.teknisi.lembar_pemeliharaan.cetak_pemeliharaan', compact('items'));
    }
}
