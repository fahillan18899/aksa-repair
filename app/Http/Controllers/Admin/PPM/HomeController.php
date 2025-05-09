<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper;
use App\Models\Registrasi;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\PerbaikanUnregistrasi;

class HomeController extends Controller
{
    private Helper $helper;

    public function __construct()
    {
        $this->helper = new Helper();
    }

    public function notifyUser(Request $request)
    {
        $token = Auth::user()->kode_rs;
        $level = 'user';
        $topik = $token . $level;
        $clickActionUrl = 'https://wyasaaplikasi.com/dashboard_user/perbaikan_teregistrasi';
        $title = 'a';
        $message = 'Alat ' . $title;
        // create run the method from App/Helpers.php

        $this->helper->sendPushNotification($title, $message, $topik, $clickActionUrl);
    }

    public function dashboard()
    {
        $kodeRs = Auth::user()->kode_rs; // Mengambil kode_rs dari user yang sudah login

        $registrasi = Registrasi::where('kode_rs', $kodeRs)->count();
        $registrasiKalBar = Registrasi::where('kode_rs', $kodeRs)
        ->where('tanggal_kalibrasi', '!=', '')->whereNotNull('tanggal_kalibrasi')
        ->whereDate('tanggal_kalibrasi', '!=', '0000-00-00')->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', $kodeRs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs', $kodeRs)->count();

        // Mengambil data yang diperlukan dalam 1 query untuk lebih efisien
        $dataPerbaikan = PerbaikanRegistrasi::where('kode_rs', $kodeRs)->get();
        $dataKalibrasi = LembarPemeliharaan::where('kode_rs', $kodeRs)->get();

        return view('pages.admin.PPM.dashboard.index',
        compact('registrasi', 'registrasiKalBar', 'perbaikanRegistrasi',
                'dataPerbaikan', 'lembarPemeliharaan', 
                'dataKalibrasi')
        );
    }

    public function dataInventaris()
    {
        $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
    
        return view('pages.admin.PPM.data_inventaris.index', compact('items'));
    }
    

    public function printDataInventaris($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();

        return view('pages.admin.PPM.data_inventaris.cetak_aset', compact('item'));
    }

    public function tabelKerusakan($id)
    {
        $itemPerbaikan = PerbaikanRegistrasi::where('id_aset_reg', $id)
            ->where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.data_inventaris.tabel_perbaikan',compact('itemPerbaikan'));
    }

    public function qrCodeGenerate($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();

        return view('pages.admin.PPM.data_inventaris.qr_code', compact('item'));
    }

    public function analisData()
    {
        $item = Registrasi::all();

        return view('pages.admin.PPM.analisis_data.index', compact('item'));
    }

    public function detailData($id)
    {

        $itemData = Registrasi::where('id_aset', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $itemKerusakan = PerbaikanRegistrasi::where('id_aset_reg', $id)->count();

        return view('pages.admin.PPM.data_inventaris.detail', compact('itemData', 'itemKerusakan'));
    }

    public function autofill($id)
    {
        $data = Pesanan::where('id', $id)->first();
        return json_encode($data);
    }

    public function autofill_pelihara($id)
    {
        $data = Registrasi::where('id_aset', $id)->first();
        return json_encode($data);
    }

    public function autofillpart($id)
    {
        $data = Pesanan::where('id', $id)->first();
        return json_encode($data);
    }

    public function autofillPengiriman($id)
    {
        $data = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return json_encode($data);
    }

    public function autofillPengirimanUn($id_perbaikan_un)
    {
        $data = DB::table('perbaikan_unregistrasis')->where('id_perbaikan_un', $id_perbaikan_un)->first();

        return response()->json([
            'id_perbaikan_un'      => $data->id_perbaikan_un,
            'tanggal_perbaikan_un' => $data->tanggal_perbaikan_un,
            'nama_alat_un'         => $data->nama_alat_un,
            'merek_alat_un'        => $data->merek_alat_un,
            'type_alat_un'         => $data->type_alat_un,
            'serial_number_un'     => $data->serial_number_un,
            'lokasi_alat_un'       => $data->lokasi_alat_un,
            'pelapor_un'           => $data->pelapor_un,
            'keterangan_un'        => $data->keterangan_un,
            'ka_instalasi_un'      => $data->ka_instalasi_un,
            'teknisi_1_un'         => $data->teknisi_1_un,
            'teknisi_2_un'         => $data->teknisi_2_un,
            'teknisi_3_un'         => $data->teknisi_3_un,
            'suku_cadang_un'       => $data->suku_cadang_un,
            'volume_un'            => $data->volume_un,
            'harga_satuan_un'      => $data->harga_satuan_un,
            'jumlah_harga_un'      => $data->jumlah_harga_un,
            'keluhan_dari_alat_un' => $data->keluhan_dari_alat_un,
        ]);
    }
}
