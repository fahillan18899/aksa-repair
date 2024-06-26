<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TambahDistributor;

class TambahDistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TambahDistributor::where('kode_rs', Auth::user()->kode_rs)->get();;
        return view('pages.admin.PPM.tambah_distributor.index', [
            'items' => $items
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
        $data =  $request->validate([
            'nama_distributor_p' => 'required',
            'alamat_distributor_p' => 'required',
            'telphone_distributor_p' => 'required',
            'email_distributor_p' => 'required',
            'teknisi_distributor_p' => 'required',
            'telphone_teknisi_dis_p' => 'required',
            'kode_rs' => '',
        ], [
            'nama_distributor_p.required' => 'isi data nama distributor',
            'alamat_distributor_p.required' => 'isi data alamat distributor ',
            'telphone_distributor_p.required' => 'isi data telphone distributor',
            'email_distributor_p.required' => 'isi data email distributor',
            'teknisi_distributor_p.required' => 'isi data teknisi distributor',
            'telphone_teknisi_dis_p.required' => 'isi data telphone teknisi distributor',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        TambahDistributor::create($data);
        return redirect('/dashboard/ppm/tambah_distributor')
            ->with('message', 'Data Alat Berhasil di Tambahkan.');
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
        $item = TambahDistributor::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.tambah_distributor.edit', [
            'item' => $item,
        ]);
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
            'nama_distributor_p' => '',
            'alamat_distributor_p' => '',
            'telphone_distributor_p' => '',
            'email_distributor_p' => '',
            'teknisi_distributor_p' => '',
            'telphone_teknisi_dis_p' => '',
        ]);
        $data_item = TambahDistributor::findOrFail($id);
        $data_item->update($data);


        return redirect('/dashboard/ppm/tambah_distributor')
            ->with('success', 'Data Item Berhasil Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TambahDistributor::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/tambah_distributor')->with('success', 'Data item Berhasil Di Hapus.');
    }
}
