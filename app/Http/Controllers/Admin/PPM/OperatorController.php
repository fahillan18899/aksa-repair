<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    public function index()
    {
        $items = User::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.operator.index', ['items' => $items]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:5',
            'user_role' => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        User::create($request->post());


        return redirect()->route('operator.index')
        ->with('success', 'Data User Berhasil di Tambahkan.');
    }

    public function edit($id)
    {
        $item = User::where('user_id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.PPM.operator.edit', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(['username' => 'max:255',
            'password' => 'min:5',
            'user_role' => 'numeric',
        ]);
        $operator = User::findOrFail($id);
        $operator->update($request->all());
        return redirect()->route('operator.index')
        ->with('success', 'Data User Berhasil di Ubah');
    }

    public function destroy($id)
    {
        $item = User::where('user_id',  $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect('/dashboard/ppm/operator')
        ->with('success', 'Data User Berhasil di Hapus');
    }
}
