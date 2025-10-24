<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rekap;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RekapController extends Controller
{
    public function index()
    {
        $items = Rekap::all();
        return view('pages.admin.rekap.index', compact('items'));
    }
}
