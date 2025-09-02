<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\InputCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InputanPekerjaanController extends Controller
{
    public function index() 
    {
        $marketing = Auth::user()->username;
        $item = InputCustomer::where('marketing', $marketing)->get();
        return view('pages.marketing.input_customer.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validated = $request->validate([
            'marketing'     => 'nullable',
            'instansi'      => 'nullable',
            'jumlah'        => 'nullable',
            'wilayah'       => 'nullable',      
        ]);

        InputCustomer::create($validated);
        return redirect()->route('marketing.data.inputCs')
        ->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $item = InputCustomer::findOrFail($id);
        return view('pages.marketing.input_customer.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'marketing'     => 'nullable',
            'instansi'      => 'nullable',
            'jumlah'        => 'nullable',
            'wilayah'       => 'nullable',
        ]);

        
        $item = InputCustomer::findOrFail($id);
        $item->update($validate);
        return redirect()->route('marketing.data.inputCs')
        ->with('success', 'Data berhasil di ubah');
    }

    public function delete($id)
    {
        $item = InputCustomer::findOrFail($id);
        $item->delete();
        return redirect()->route('marketing.data.inputCs')
        ->with('success', 'Data berhasil dihapus');
    }
}
