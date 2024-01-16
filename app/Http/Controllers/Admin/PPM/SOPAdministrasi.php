<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;

class SOPAdministrasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sopAdministrasi = Sop::latest()->first();
        return view('pages.admin.PPM.sop_administrasi.index', [
            'sopAdministrasi' => $sopAdministrasi['sop_administrasi'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
