<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        $item = User::all();
        return view('pages.admin.operator.index',
        compact('item'));
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'username'  => 'nullable',
            'password'  => 'nullable',
            'rs_divisi' => 'nullable',
            'user_role' => 'nullable',
            'divisi'    => 'nullable',
            'rs'        => 'nullable',
            'kode_rs'   => 'nullable'
        ]);
        $validate['password'] = bcrypt($request->input('password')); 
        User::create($validate);
        return back()->with('success', 'Data User berhasil ditambahkan');
    }

    public function edit($user_id)
    {
        $item = User::findOrFail($user_id);
        return view('pages.admin.operator.edit',
        compact('item'));
    }

    public function update(Request $request, $user_id)
    {
        $validate = $request->validate([
            'username' => 'nullable',
            'password' => 'nullable',
            'rs_divisi' => 'nullable',
            'user_role' => 'nullable',
            'divisi' => 'nullable',
            'rs' => 'nullable',
            'kode_rs' => 'nullable',
        ]);
        $validate['password'] = bcrypt($request->input('password'));
        $item = User::findOrFail($user_id);
        $item->update($validate);
        return redirect()->route('operator.data')
        ->with('success', 'Data Berhasil di Edit');

    }

    public function delete($user_id)
    {
        $item = User::findOrFail($user_id);
        $item->delete();
        return back()->with('success', 'Data Berhasil dihapus');
    }
}
