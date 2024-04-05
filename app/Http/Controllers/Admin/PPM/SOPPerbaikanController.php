<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;

class SOPPerbaikanController extends Controller
{
    public function index()
    {
        $sopPerbaikan = Sop::latest()->first();

        return view('pages.admin.PPM.sop_perbaikan.index', [
            'sopPerbaikan' => $sopPerbaikan,
        ]);

    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'sop_pemakaian' => 'mimes:pdf|max:10096',
            'sop_pemeliharaan' => 'mimes:pdf|max:10096',
            'sop_perbaikan' => 'required|mimes:pdf|max:10096',
            'sop_administrasi' => 'mimes:pdf|max:10096',
        ], [
            'sop_perbaikan.mimes' => 'File harus berformat PDF',
            'sop_perbaikan.max' => 'File maksimal 100 MB',
            'sop_perbaikan.required' => 'File wajib diisi',
        ]);
        if (isset($data['sop_perbaikan'])) {
            $data['sop_perbaikan'] = $request->file('sop_perbaikan')->store(
                'assets/gallery',
                'public'
            );
        }
        $sopPemakaian = Sop::findOrFail($id);
        $sopPemakaian->update($data);

        return redirect('/dashboard/ppm/sop_perbaikan')->with('success', 'SOP Perbaikan Berhasil Di Ubah.');
    }
}
