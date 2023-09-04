<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerbaikanRegistrasi;
use App\Models\PengirimanRegistrasi;
use App\Models\PengembalianRegistrasi;
use App\Models\PenghapusanRegistrasi;
use App\Models\Registrasi;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Support\Facades\DB;


class PerbaikanRegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PerbaikanRegistrasi::all();
        $result_pengiriman = PengirimanRegistrasi::all();
        $result_penghapusan = PenghapusanRegistrasi::all();
        $result_pengembalian = PengembalianRegistrasi::all();
        $teknisis = Teknisi::all();


        $data = DB::table('perbaikan_registrasis')
        ->select(DB::raw('max(id_perbaikan_reg) as idPerbaikan'))
        // ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeAset = $data->idPerbaikan;

        $urutan = (int)substr($kodeAset, 7, 8);
        $urutan++;

        $huruf3 = "B";
        $date3  = date('dmy');
        $kode_aset  = $huruf3 . $date3 . sprintf("%04s", $urutan);

        return view('pages.admin.ppm.aset_teregistrasi.index', [
            'items' => $items,
            'result_pengembalian' => $result_pengembalian,
            'result_penghapusan' => $result_penghapusan,
            'result_pengiriman' => $result_pengiriman,
            'kode_aset' => $kode_aset,
            'teknisis' => $teknisis,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg' => '',
            'id_aset_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'keluhan_dari_alat_reg' => '',
            'korektif_reg' => '',
            'active' => ''
        ]);

        PerbaikanRegistrasi::create($request->post());


        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil Tambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $teknisis      = Teknisi::all();
        $ruangans      = Ruangan::all();
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.update_perbaikan', [
            'item' => $item,
            'teknisis'      => $teknisis,
            'ruangans'     => $ruangans,
        ]);
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $perbaikanRegistrasi)
    {
        $request->validate([
            'tanggal_perbaikan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'keluhan_dari_alat_reg' => '',
            'korektif_reg' => '',
            'kode_rs' => '',
            'active' => ''
        ]);

        $perbaikanRegistrasi = PerbaikanRegistrasi::findOrFail($perbaikanRegistrasi);
        $perbaikanRegistrasi->update($request->all());

        return redirect()->route('aset_teregistrasi.index')
        ->with('success', 'Data Berhasil Ubah.');
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function cetak($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return view('pages.admin.ppm.aset_teregistrasi.cetak_perbaikan', compact('item'));
    }
}
