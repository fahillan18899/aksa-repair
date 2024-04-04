<?php

namespace App\Http\Controllers\User\PPM;

use App\Http\Controllers\Controller;
use App\Models\StockOpname;
use Illuminate\Support\Facades\Auth;

class StockOpnameUserController extends Controller
{
    public function index()
    {
        $items = StockOpname::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.user.stock_opname_user.index', ['items' => $items]);
    }
}
