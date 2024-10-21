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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inv = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $invPemantauan = pemantauan::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.pemantauan.index', [

            'invPemantauan' => $invPemantauan,
            'Inv' => $Inv,
            'teknisis' => $teknisis,
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
            'hand_hygiene' => '',
            'menyiapkan_alat_dan_bahan' => '',
            'alat_pelindung_diri' => '',
            'mengoprasikan_alat_kalibrasi' => '',
            'ktd' => '',
            'mengoprasikan_alat' => '',
            'identifikasi_bahaya' => '',
            'badan_selungkup1' => '',
            'badan_selungkup2' => '',
            'kabel_kelenturan1' => '',
            'kabel_kelenturan2' => '',
            'tombol_saklar1' => '',
            'tombol_saklar2' => '',
            'display_layar1' => '',
            'display_layar2' => '',
            'indikator_bunyi1' => '',
            'indikator_bunyi2' => '',
            'alarm_sistem_interlock1' => '',
            'alarm_sistem_interlock2' => '',
            'sistem_pengunci1' => '',
            'sistem_pengunci2' => '',
            'label_penandaan1' => '',
            'label_penandaan2' => '',
            'aksesoris1' => '',
            'aksesoris2' => '',
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
        pemantauan::create($data);

        return redirect()->route('pemantauan.index')
        ->with('success', 'Pemantauan Berhasil Disimpan');
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

    //Autofill Selected
    public function getPemantauan($id)
    {
      $pemantauan = Registrasi::where("id_aset", $id)->get();
      return json_encode($pemantauan);
    }
}
