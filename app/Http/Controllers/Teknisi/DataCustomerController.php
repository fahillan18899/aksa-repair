<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use App\Models\InputCustomer;
use Illuminate\Http\Request;

class DataCustomerController extends Controller
{
    public function index()
    {
        $item = DataCustomer::all();
        $data = InputCustomer::all();
        return view('pages.teknisi.data_customer.index', 
        compact('item', 'data'));
    }

    public function fetch($id)
    {
        $data = InputCustomer::where('id', $id)->first();
        return response()->json($data);
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'instansi'    => 'nullable',
            'jumlah'      => 'nullable',
            'marketing'   => 'nullable',
            'wilayah'     => 'nullable',
            'jadwal1'     => 'nullable',
            'jadwal2'     => 'nullable',
            'realisasi'   => 'nullable',
            'mobil'       => 'nullable',
            'teknisi'     => 'nullable',
        ]);

        $validate['jadwal'] = $validate['jadwal1'] . ' / ' . $validate['jadwal2'];
        DataCustomer::create($validate);
        return redirect()->route('teknisi.data.dataCs')
        ->with('success', 'Data berhasil disimpan');

    }

    public function edit($id)
    {
        $item = DataCustomer::findOrFail($id);
        return view('pages.teknisi.data_customer.edit', 
        compact('item'));
    }

    public function update( Request $request, $id)
    {
        $validate = $request->validate([
            'jadwal1'     => 'nullable',
            'jadwal2'     => 'nullable',
            'realisasi'   => 'nullable',
            'mobil'       => 'nullable',
            'teknisi'     => 'nullable',
        ]);

        $validate['jadwal'] = $validate['jadwal1'] . ' / ' . $validate['jadwal2'];
        $item = DataCustomer::findOrFail($id);
        $item->update($validate);
        return redirect()->route('teknisi.data.dataCs')
        ->with('success', 'Data berhasil di ubah');
    }

    public function delete($id)
    {
        $item = DataCustomer::findOrFail($id);
        $item->delete();
        return redirect()->route('teknisi.data.dataCs')
        ->with('success', 'Data berhasil di hapus');
    }

    public function deleteI($id)
    {
        $item = InputCustomer::findOrfail($id);
        $item->delete();
        return redirect()->route('teknisi.data.dataCs')
        ->with('success', 'Data berhasil di hapus');
    }
}
