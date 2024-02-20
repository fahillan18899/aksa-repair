<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('pages.admin.home');
    }

    function qrGen()
    {
        return view('pages.admin.qr_code');
    }

    function createQrGen()
    {
        return view('pages.admin.createQr');
    }

    function storeQrGen(Request $request)
    {
        $item = $request->validate([
            'kode' => 'required|max:2',
            'angka_awal' => 'required|max:5',
            'angka_akhir' => 'required|max:5',
        ], [
            'kode.required' => 'Kode wajib diisi',
            'kode.max' => 'Kode maksimal 2 karakter',
        ]);
        $item['kode'] = strtoupper($item['kode']);
        return view('pages.admin.qr_code', [
            'item' => $item,
        ]);
    }
}
