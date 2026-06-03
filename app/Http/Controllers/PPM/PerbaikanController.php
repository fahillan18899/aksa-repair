<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inv;

class PerbaikanController extends Controller
{
    public function create(Request $request)
    {
        $qr = $request->qr;
        $alat = Inv::where('id_alat', $qr)->firstOrFail();
        return view('pages.admin.PPM.perbaikan.create', compact('qr', 'alat'));
    }
}
