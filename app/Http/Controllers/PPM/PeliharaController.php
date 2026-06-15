<?php

namespace App\Http\Controllers\PPM;

use App\Models\Inv;
use App\Models\pelihara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PeliharaController extends Controller
{
    public function create(Request $request)
    {
        $qr = $request->qr;
        $rs = Auth::user()->rs;
        $items = pelihara::where('id_alat', $qr)->get();
        $alat = Inv::where('id_alat', $qr)->firstOrFail();
        return view('pages.admin.PPM.pelihara.create', compact('qr','alat','items', 'rs'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'id_alat' => '',
            'teknisi'  => '',
            'nama_alat' => '',
            'seri' => '',
            'merek' => '',
            'type' => '',
            'lokasi' => '',
            'persiapan' => 'required|array',
            'persiapan.hand_hygiene' => 'nullable|string',
            'persiapan.menyiapkan_alat_dan_bahan' => 'nullable|string',
            'persiapan.alat_pelindung_diri' => 'nullable|string',
            'persiapan.mengoprasikan_alat_kalibrasi' => 'nullable|string',
            'persiapan.ktd' => 'nullable|string',
            'persiapan.mengoprasikan_alat' => 'nullable|string',
            'persiapan.identifikasi_bahaya' => 'nullable|string',
            'pemantauan' => 'required|array',
            'pemantauan.badan_selungkup1' => 'nullable|string',
            'pemantauan.badan_selungkup2' => 'nullable|string',
            'pemantauan.kabel_kelenturan1' => 'nullable|string',
            'pemantauan.kabel_kelenturan2' => 'nullable|string',
            'pemantauan.tombol_saklar1' => 'nullable|string',
            'pemantauan.tombol_saklar2' => 'nullable|string',
            'pemantauan.display_layar1' => 'nullable|string',
            'pemantauan.display_layar2' => 'nullable|string',
            'pemantauan.indikator_bunyi1' => 'nullable|string',
            'pemantauan.indikator_bunyi2' => 'nullable|string',
            'pemantauan.alarm_sistem_interlock1' => 'nullable|string',
            'pemantauan.alarm_sistem_interlock2' => 'nullable|string',
            'pemantauan.sistem_pengunci1' => 'nullable|string',
            'pemantauan.sistem_pengunci2' => 'nullable|string',
            'pemantauan.label_penandaan1' => 'nullable|string',
            'pemantauan.label_penandaan2' => 'nullable|string',
            'pemantauan.aksesoris1' => 'nullable|string',
            'pemantauan.aksesoris2' => 'nullable|string',
            'cek_alat' => '',
            'evaluasi' => '',
            'foto' => '',

        ]);

        if (isset($request['foto'])) {
            $request['foto'] = $request->file('foto')->store('alat', 'public');
        }

        $request['persiapan'] = json_encode($request['persiapan']);
        $request['pemantauan'] = json_encode($request['pemantauan']);

        pelihara::create($request->post());
        session()->flash('success', 'Data Berhasil Tersimpan');
        return back();
    }

    public function show($id)
    {
        $item = Pelihara::findOrFail($id);

        $item->persiapan = json_decode($item->persiapan, true) ?? [];
        $item->pemantauan = json_decode($item->pemantauan, true) ?? [];

        return view('pages.admin.PPM.pelihara.show', compact('item'));
    }
}
