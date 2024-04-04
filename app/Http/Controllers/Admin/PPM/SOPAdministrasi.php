<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;

class SOPAdministrasi extends Controller
{
    public function index()
    {
        $sopAdministrasi = Sop::latest()->first();

        return view('pages.admin.PPM.sop_administrasi.index', [
            'sopAdministrasi' => $sopAdministrasi['sop_administrasi'],
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'sop_pemakaian' => 'mimes:pdf|max:10096',
            'sop_pemeliharaan' => 'mimes:pdf|max:10096',
            'sop_perbaikan' => 'mimes:pdf|max:10096',
            'sop_administrasi' => 'required|mimes:pdf|max:10096',
        ], [
            'sop_administrasi.mimes' => 'File harus berformat PDF',
            'sop_administrasi.max' => 'File maksimal 100 MB',
            'sop_administrasi.required' => 'File wajib diisi',
        ]);
        if (isset($data['sop_administrasi'])) {
            $data['sop_administrasi'] = $request->file('sop_administrasi')->store(
                'assets/gallery',
                'public'
            );
        }
        $sopAdministrasi = Sop::findOrFail($id);
        $sopAdministrasi->update($data);

        return redirect('/dashboard/ppm/sop_administrasi')->with('success', 'SOP Adminsitrasi Berhasil Di Ubah.');
    }
}
