<?php

namespace App\Http\Controllers\User\PPM;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('pages.user.aset_teregistrasi.index', [
            'items' => $items,
            'result_pengembalian' => $result_pengembalian,
            'result_penghapusan' => $result_penghapusan,
            'result_pengiriman' => $result_pengiriman,
            'kode_aset' => $kode_aset,
            'teknisis' => $teknisis,
            'registrasis' => $registrasis,

        ]);
    }

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
        $token = Auth::user()->kode_rs;
        $level = "admin";
        $topik = $token . $level;
        $clickActionUrl = 'https://wyasaaplikasi.com/perbaikan_teregistrasi/perbaikanunreg';
        $title = $request['nama_alat_reg'];
        $message = "Alat " . $title;
        $this->sendPushNotification($title, $message,  $topik, $clickActionUrl);


        return redirect('/dashboard_user/perbaikan_unregistrasi')
        ->with('success', 'Data Berhasil Tambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.ppm.aset_teregistrasi.cetak_perbaikan', compact('item'));
    }

    function qrCodeGenerate($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        return view('pages.user.aset_teregistrasi.qr_code', compact('item'));
    }

}
