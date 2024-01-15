<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerbaikanRegistrasi;
use App\Models\PengirimanRegistrasi;
use App\Models\PengembalianRegistrasi;
use App\Models\PenghapusanRegistrasi;
use App\Models\Registrasi;
use App\Models\Alat;
use App\Models\Teknisi;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PerbaikanTeregistrasiController extends Controller
{
    public function index()
    {
        $items = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $result_pengiriman = PengirimanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $result_penghapusan = PenghapusanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $result_pengembalian = PengembalianRegistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $registrasis = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('perbaikan_registrasis')
        ->select(DB::raw('max(id_perbaikan_reg) as idPerbaikan'))
            ->where('kode_rs', Auth::user()->kode_rs)
        ->first();
        $kodeAset = $data->idPerbaikan;

        $urutan = (int)substr($kodeAset, 15, 16);
        $urutan++;

        $huruf3 = "B";
        $date3  = date('ymd');
        $kode_aset  = $kodeRs_ . $huruf3 . $date3 . sprintf("%04s", $urutan);

        return view('pages.teknisi.aset_teregistrasi.index', [
            'items' => $items,
            'result_pengembalian' => $result_pengembalian,
            'result_penghapusan' => $result_penghapusan,
            'result_pengiriman' => $result_pengiriman,
            'kode_aset' => $kode_aset,
            'teknisis' => $teknisis,
            'registrasis' => $registrasis,

        ]);
    }

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

        $request['kode_rs'] = Auth::user()->kode_rs;
        PerbaikanRegistrasi::create($request->post());


        return redirect('/dashboard_teknisi/perbaikan_teregistrasi')
        ->with('success', 'Data Berhasil Tambahkan.');
    }

    public function cetak_teknisi($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.teknisi.aset_teregistrasi.cetak_perbaikan', compact('item'));
    }

    function qrCodeGenerate($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        return view('pages.teknisi.aset_teregistrasi.qr_code', compact('item'));
    }

}
