<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\PerbaikanUnregistrasi;
use Illuminate\Support\Facades\Auth;


class ViewTableController2 extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asetPerbaikanUn = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();

        return view('pages.admin.PPM.view_tabel2.tabel_perbaikanUn', [

            'asetPerbaikanUn' => $asetPerbaikanUn,
        ]);
    }
}
