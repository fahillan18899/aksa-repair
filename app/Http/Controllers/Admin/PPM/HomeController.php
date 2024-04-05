<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function notifyUser(Request $request)
    {
        $token = Auth::user()->kode_rs;
        $level = 'user';
        $topik = $token . $level;
        $clickActionUrl = 'https://wyasaaplikasi.com/perbaikan_teregistrasi/perbaikanunreg';
        $title = 'a';
        $message = 'Alat ' . $title;
        // create run the method from App/Helpers.php

        $this->helper->sendPushNotification($title, $message, $topik, $clickActionUrl);
    }

    public function dashboard()
    {
        $registrasi = Registrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $registrasiKalBar = Registrasi::where('kode_rs', Auth::user()->kode_rs)->whereNotNull('tanggal_kalibrasi')->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs', Auth::user()->kode_rs)->count();

        return view(
            'pages.admin.PPM.dashboard.index',
            [
                'registrasi' => $registrasi,
                'registrasiKalBar' => $registrasiKalBar,
                'perbaikanRegistrasi' => $perbaikanRegistrasi,
                'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
                'lembarPemeliharaan' => $lembarPemeliharaan,
            ]
        );
    }

    public function dataInventaris()
    {
        $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.data_inventaris.index', ['items' => $items]);
    }

    public function printDataInventaris($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();

        return view('pages.admin.PPM.data_inventaris.cetak_aset', compact('item'));
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

    public function autofill($idars)
    {
        $data = DB::table('registrasis')->where('id_aset', $idars)->first();

        return response()->json(['nama_alat_reg' => $data->nama_alat,
            'merek_alat_reg' => $data->merek,
            'serial_number_reg' => $data->serial_number,
            'lokasi_alat_reg' => $data->lokasi_alat,
            'type' => $data->type,
        ]);
    }

    public function autofillPengiriman($id_perbaikan_reg)
    {
        $data = DB::table('perbaikan_registrasis')->where('id_perbaikan_reg', $id_perbaikan_reg)->first();

        return response()->json([
            'Id_Perbaikan_reg' => $data->id_perbaikan_reg,
            'Tanggal_Perbaikan_reg' => $data->tanggal_perbaikan_reg,
            'ID_Aset_reg' => $data->id_aset_reg,
            'Nama_Alat_reg' => $data->nama_alat_reg,
            'Merek_Alat_reg' => $data->merek_alat_reg,
            'Type_Alat_reg' => $data->type_alat_reg,
            'Serial_Number_reg' => $data->serial_number_reg,
            'Lokasi_Alat_reg' => $data->lokasi_alat_reg,
            'Teknisi_1_reg' => $data->teknisi_1_reg,
            'Pelapor_reg' => $data->pelapor_reg,
            'Teknisi_2_reg' => $data->teknisi_2_reg,
            'Teknisi_3_reg' => $data->teknisi_3_reg,
            'Keterangan_Kondisi_Alat_reg' => $data->keterangan_kondisi_alat_reg,
            'Ka_Instalasi_reg' => $data->ka_instalasi_reg,
            'suku_cadang' => $data->suku_cadang,
            'volume' => $data->volume,
            'harga_satuan' => $data->harga_satuan,
            'jumlah_harga' => $data->jumlah_harga,
        ]);
    }

    public function autofillPengirimanUn($id_perbaikan_un)
    {
        $data = DB::table('perbaikan_unregistrasis')->where('id_perbaikan_un', $id_perbaikan_un)->first();

        return response()->json([
            'id_perbaikan_un' => $data->id_perbaikan_un,
            'tanggal_perbaikan_un' => $data->tanggal_perbaikan_un,
            'nama_alat_un' => $data->nama_alat_un,
            'merek_alat_un' => $data->merek_alat_un,
            'type_alat_un' => $data->type_alat_un,
            'serial_number_un' => $data->serial_number_un,
            'lokasi_alat_un' => $data->lokasi_alat_un,
            'pelapor_un' => $data->pelapor_un,
            'keterangan_un' => $data->keterangan_un,
            'ka_instalasi_un' => $data->ka_instalasi_un,
            'teknisi_1_un' => $data->teknisi_1_un,
            'teknisi_2_un' => $data->teknisi_2_un,
            'teknisi_3_un' => $data->teknisi_3_un,
            'keluhan_dari_alat_un' => $data->keluhan_dari_alat_un,
        ]);
    }
}
