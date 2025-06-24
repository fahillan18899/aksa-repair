<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper;
use App\Models\Pesanan;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use App\Models\LembarPemeliharaan;
use App\Models\PerbaikanRegistrasi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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

        return view('pages.admin.PPM.dashboard.index',
        compact('registrasi', 'registrasiKalBar', 'perbaikanRegistrasi')
        );
    }

    //Fetch data count
    public function countPermintaan() 
    {
        $countPermintaan = Pesanan::where('kode_rs', Auth::user()->kode_rs)->count();
        return response()->json(['countPermintaan' => $countPermintaan]);
    }

    public function countPerbaikan()
    {
        $countPerbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->count();
        return response()->json(['countPerbaikan' => $countPerbaikan]);
    }
    //Fetch data table
    public function getPerbaikan()
    {
        $perbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->orderBy('created_at', 'desc')->get();
        return response()->json($perbaikan);
    }


    public function getPermintaan()
    {
        $permintaan = Pesanan::where('kode_rs', Auth::user()->kode_rs)->orderBy('created_at', 'desc')->get();
        return response()->json($permintaan);
    }
// wkwkwkkw

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
        $data = Pesanan::where('id_req', $id)->first();
        return json_encode($data);
    }

    public function autofill_pelihara($id)
    {
        $data = Registrasi::where('id_aset', $id)->first();
        return json_encode($data);
    }

    public function autofillpart($id)
    {
        $data = Pesanan::where('id_req', $id)->first();
        return json_encode($data);
    }

    public function autofillPengiriman($id)
    {
        $data = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();
        return json_encode($data);
    }
}
