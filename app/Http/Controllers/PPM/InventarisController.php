<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        return view('pages.admin.PPM.inv.index', compact('items'));
    }
}
