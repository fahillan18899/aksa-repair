<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use Illuminate\Http\Request;

class PengerjaanKalibrasiController extends Controller
{
    public function index()
    {
        $item = DataCustomer::all();
        return view('pages.teknisi.surat_terima.index',
        compact('item'));
    }

        public function pengerjaan($id)
    {
        $item = DataCustomer::findOrFail($id);
        $item->pengerjaan = $item->pengerjaan === 0 ? 1 : 0;
        $item->save();
        return back();
    }
}
