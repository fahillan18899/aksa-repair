<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inv;
use App\Models\Pelihara;

class PeliharaController extends Controller
{
    public function create(Request $request)
    {
        $qr = $request->qr;
        // $items = Pelihara::latest()->get();
        $alat = Inv::where('id_alat', $qr)->firstOrFail();
        return view('pages.admin.PPM.pelihara.create', compact('qr','alat'));
    }
}
