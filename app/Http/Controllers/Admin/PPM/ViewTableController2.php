<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
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
        return view('pages.admin.PPM.view_tabel2.tabel_perbaikanUn');
    }
}
