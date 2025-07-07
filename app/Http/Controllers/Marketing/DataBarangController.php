<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    public function index()
    {
        $item = DataBarang::all();
        return view('pages.marketing.data_barang.index',
        compact('item'));
    }
}
