<?php

namespace App\Http\Controllers\PPM;

use App\Models\Inv;
use App\Models\pelihara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeliharaController extends Controller
{
    public function create(Request $request)
    {
        $qr = $request->qr;
        $alat = Inv::where('id_alat', $qr)->first();
        
        if (!$alat) {
            return redirect()
                ->route('qr.menu', ['id' => $qr])
                ->with('error','Alat belum terinventaris. Silakan lakukan inventaris terlebih dahulu');
        }
        $rs = $alat->rs;
        $items = pelihara::where('id_alat', $qr)->get();
        return view('pages.admin.PPM.pelihara.create', compact('qr','alat','items','rs'));
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
        return redirect()->route('qr.menu', ['id' => $request->id_alat]);
    }

    public function edit($id)
    {
        $item = pelihara::findOrFail($id);

        return view('pages.admin.PPM.pelihara.edit',compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate =  $request->validate([

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

        ]);
        
        $validate['persiapan'] = json_encode($validate['persiapan']);
        $validate['pemantauan'] = json_encode($validate['pemantauan']);
        $item = pelihara::findOrFail($id);
        $item->update($validate);
        session()->flash('success', 'Data Berhasil Tersimpan');
        return redirect()->route('pelihara.create', ['qr' => $item->id_alat]);
    }

    public function show($id)
    {
        $item = pelihara::findOrFail($id);

        $item->persiapan = json_decode($item->persiapan, true) ?? [];
        $item->pemantauan = json_decode($item->pemantauan, true) ?? [];

        return view('pages.admin.PPM.pelihara.show', compact('item'));
    }
}
