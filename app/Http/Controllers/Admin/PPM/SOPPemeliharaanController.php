<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;

class SOPPemeliharaanController extends Controller
{
    public function index()
    {
        $sopPemeliharaan = Sop::latest()->first();

        return view('pages.admin.PPM.sop_pemeliharaan.index', [
            'sopPemeliharaan' => $sopPemeliharaan['sop_pemeliharaan'],
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'sop_pemakaian' => 'mimes:pdf|max:10096',
            'sop_pemeliharaan' => 'required|mimes:pdf|max:10096',
            'sop_perbaikan' => 'mimes:pdf|max:10096',
            'sop_administrasi' => 'mimes:pdf|max:10096',
        ], [
            'sop_pemeliharaan.mimes' => 'File harus berformat PDF',
            'sop_pemeliharaan.max' => 'File maksimal 100 MB',
            'sop_pemeliharaan.required' => 'File wajib diisi',
        ]);
        if (isset($data['sop_pemeliharaan'])) {
            $data['sop_pemeliharaan'] = $request->file('sop_pemeliharaan')->store(
                'assets/gallery',
                'public'
            );
        }
        $sopPemakaian = Sop::findOrFail($id);
        $sopPemakaian->update($data);

        return redirect('/dashboard/ppm/sop_pemeliharaan')->with('success', 'SOP Pemeliharaan Berhasil Di Ubah.');
    }
}
