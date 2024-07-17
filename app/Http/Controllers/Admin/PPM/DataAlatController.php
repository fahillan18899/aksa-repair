<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Registrasi;
use Illuminate\Http\Request;

class DataAlatController extends Controller
{
    public function index($id)
    {
        $data = Registrasi::where('id_aset', $id)->first();
        if(is_null($data)) {
            return redirect('dashboard/ppm/scanner_qr'); 
        } else {
            return view('pages.admin.PPM.data_alat.index', [
                'data' => $data,
            ]);
        }
    }
}

