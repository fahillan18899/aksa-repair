<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Registrasi;
use App\Models\pemantauan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemantauanController extends Controller
{
    public function index()
    {
        $Inv = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $invPemantauan = pemantauan::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.pemantauan.index',
        compact('Inv', 'invPemantauan', 'teknisis'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'id_pemantauan' => '',
            'tanggal'  => '',
            'kegiatan' => '',
            'engineer' => '',
            'idInv_pemantauan' => '',
            'nama_alat_pemantauan' => '',
            'serial_number_pemantauan' => '',
            'merek_pemantauan' => '',
            'type_pemantauan' => '',
            'ruangan_pemantauan' => '',
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
            'nama_sukucadang' => '',
            'volume' => '',
            'harga_satuan' => '',
            'jumlah_harga' => '',
            'evaluasi' => '',
            'status' => '',
            'status1' => '',
            'foto_pendukung' => '',

        ]);

        if (isset($data['foto_pendukung'])) {
            $data['foto_pendukung'] = $request->file('foto_pendukung')->store(
                'assets/gallery',
                'public'
            );
        }
        $data['kode_rs'] = Auth::user()->kode_rs;
        $data['persiapan'] = json_encode($data['persiapan']);
        $data['pemantauan'] = json_encode($data['pemantauan']);
        pemantauan::create($data);

        return redirect()->route('pemantauan.index')
        ->with('success', 'Pemantauan Berhasil Disimpan');
    }

    public function show($id)
    {
        $items = pemantauan::where('id_pemantauan', $id)->where('kode_rs', Auth::user()->kode_rs)->get();
        foreach ($items as $item) {
            $item->persiapan = json_decode(trim($item->persiapan), true);
            if (is_string($item->persiapan)) {
                $item->persiapan = json_decode($item->persiapan, true);
            }
        
            $item->pemantauan = json_decode(trim($item->pemantauan), true);
            if (is_string($item->pemantauan)) {
                $item->pemantauan = json_decode($item->pemantauan, true);
            }
        }
        return view('pages.admin.PPM.pemantauan.cetak', compact('items'));
    }

    //Autofill Selected
    public function getPemantauan($id)
    {
      $pemantauan = Registrasi::where("id_aset", $id)->get();
      return json_encode($pemantauan);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
}
