<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\PerbaikanNonAset;
use App\Models\PerbaikanRegistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\LembarPemeliharaan;
use Illuminate\Http\Request;
use App\Models\Registrasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helper\Helper;

class HomeController extends Controller
{

    public function sendPushNotification($title, $message, $topic, $clickActionUrl)
    {
        define('SERVER_API_KEY', 'AAAA655-gzI:APA91bGRVjsxkopYiQp_v1nQjASeYsyjBEhXKRkRC766APSytX9Evc6d5Noz1seTF3irwqi5rzbIDE2utWgld_Yr3Or1IZI67WPurKfvU9epaoaZg8v0fDspsXu5HicWWdJjVvf-YPAl');

        $header = [
            'Authorization: Key=' . SERVER_API_KEY,
            'Content-Type: Application/json'
        ];


        $msg = [
            'title' => $title,
            'body' => $message,
            'sound' => 'default',
            'icon' => '/999.png',
            'click_action' => $clickActionUrl
        ];

        $payload = [
            'condition' => "'$topic' in topics",
            'data' => $msg
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => $header
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            "cURL Error #:" . $err;
        } else {
            $response;
        }
    }

    public function notifyUser(Request $request)
    {
        $token = Auth::user()->kode_rs;;
        $level = "user";
        $topik = $token . $level;
        $clickActionUrl = 'https://wyasaaplikasi.com/perbaikan_teregistrasi/perbaikanunreg';
        $title = "a";
        $message = "Alat " . $title;
        // create run the method from App/Helpers.php

        $this->sendPushNotification($title, $message,  $topik, $clickActionUrl);
    }
    
    function dashboard()
    {
        $registrasi = Registrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $registrasiKalBar = Registrasi::where('kode_rs',Auth::user()->kode_rs)->whereNotNull('tanggal_kalibrasi')->count();
        $perbaikanRegistrasi = PerbaikanRegistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $perbaikanUnregistrasi = PerbaikanUnregistrasi::where('kode_rs',Auth::user()->kode_rs)->count();
        $lembarPemeliharaan = LembarPemeliharaan::where('kode_rs',Auth::user()->kode_rs)->count();


        return view(
            'pages.admin.PPM.dashboard.index',
            [
                'registrasi' => $registrasi,
                'registrasiKalBar' => $registrasiKalBar,
                'perbaikanRegistrasi' => $perbaikanRegistrasi,
                'perbaikanUnregistrasi' => $perbaikanUnregistrasi,
                'lembarPemeliharaan' => $lembarPemeliharaan
            ]
        );
    }

    function dataInventaris()
    {
        $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.data_inventaris.index', ['items' => $items]);
    }

    function printDataInventaris($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        return view('pages.admin.PPM.data_inventaris.cetak_aset', compact('item'));
    }

    
    function qrCodeGenerate($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        return view('pages.admin.PPM.data_inventaris.qr_code', compact('item'));
    }

    function analisData()
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
            'Id_Perbaikan_reg'            => $data->id_perbaikan_reg,
            'Tanggal_Perbaikan_reg'       => $data->tanggal_perbaikan_reg,
            'ID_Aset_reg'                 => $data->id_aset_reg,
            'Nama_Alat_reg'               => $data->nama_alat_reg,
            'Merek_Alat_reg'              => $data->merek_alat_reg,
            'Type_Alat_reg'               => $data->type_alat_reg,
            'Serial_Number_reg'           => $data->serial_number_reg,
            'Lokasi_Alat_reg'             => $data->lokasi_alat_reg,
            'Teknisi_1_reg'               => $data->teknisi_1_reg,
            'Pelapor_reg'                 => $data->pelapor_reg,
            'Teknisi_2_reg'               => $data->teknisi_2_reg,
            'Teknisi_3_reg'               => $data->teknisi_3_reg,
            'Keterangan_Kondisi_Alat_reg' => $data->keterangan_kondisi_alat_reg,
            'Ka_Instalasi_reg'            => $data->ka_instalasi_reg
        ]);
    }

    public function autofillPengirimanUn($id_perbaikan_un)
    {
        $data = DB::table('perbaikan_unregistrasis')->where('id_perbaikan_un', $id_perbaikan_un)->first();

        return response()->json([
            'id_perbaikan_un'             => $data->id_perbaikan_un,
            'tanggal_perbaikan_un'        => $data->tanggal_perbaikan_un,
            'nama_alat_un'                => $data->nama_alat_un,
            'merek_alat_un'               => $data->merek_alat_un,
            'type_alat_un'                => $data->type_alat_un,
            'serial_number_un'            => $data->serial_number_un,
            'lokasi_alat_un'              => $data->lokasi_alat_un,
            'pelapor_un'                  => $data->pelapor_un,
            'keterangan_un'               => $data->keterangan_un,
            'ka_instalasi_un'             => $data->ka_instalasi_un,
            'teknisi_1_un'                => $data->teknisi_1_un,
            'teknisi_2_un'                => $data->teknisi_2_un,
            'teknisi_3_un'                => $data->teknisi_3_un,
            'keluhan_dari_alat_un'        => $data->keluhan_dari_alat_un
        ]);
        var_dump($data);
    }
}
