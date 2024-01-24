<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;

class SOPPemakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sopPemakaian = Sop::latest()->first();  
        return view('pages.admin.PPM.sop_pemakaian.index', [
            'sopPemakaian' => $sopPemakaian['sop_pemakaian'],
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
            'sop_pemakaian' => 'required|mimes:pdf|max:10096',
            'sop_pemeliharaan' => 'mimes:pdf|max:10096',
            'sop_perbaikan' => 'mimes:pdf|max:10096',
            'sop_administrasi' => 'mimes:pdf|max:10096',
        ], [
            'sop_pemakaian.mimes' => 'File harus berformat PDF',
            'sop_pemakaian.max' => 'File maksimal 100 MB',
            'sop_pemakaian.required' => 'File wajib diisi',
        ]);
        if (isset($data['sop_pemakaian'])) {
            $data['sop_pemakaian'] = $request->file('sop_pemakaian')->store(
                'assets/gallery',
                'public'
            );
        }
        $sopPemakaian = Sop::findOrFail($id);
        $sopPemakaian->update($data);


        return redirect('/dashboard/ppm/sop_pemakaian')->with('success', 'SOP Pemakaian Berhasil Di Ubah.');
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
