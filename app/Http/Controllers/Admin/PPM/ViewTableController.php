<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\PerbaikanRegistrasi;
use App\Models\Teknisi;
use App\Helper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function index()
    {
        $asetPerbaikan = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('perbaikan_registrasis')
        ->select(DB::raw('max(id_perbaikan_reg) as idPerbaikan'))
        ->where('kode_rs', Auth::user()->kode_rs)
        ->first();
        $kodeAset = $data->idPerbaikan;

        $kode_aset = $this->helper->formatKodeAsetB($kodeAset, $kodeRs_);

        return view('pages.admin.PPM.view_tabel.tabel_perbaikan', [

            'asetPerbaikan' => $asetPerbaikan,
            'teknisis' => $teknisis,
            'kode_aset' => $kode_aset,
        ]);
    }

}
