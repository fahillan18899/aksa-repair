<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HumanResourceController extends Controller
{
    public function index()
    {
        $items = User::all();

        return view('pages.admin.human_resource.index', ['items' => $items]);
    }

    public function create()
    {
        return view('pages.admin.human_resource.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required',
            'user_role' => 'required',
            'firstname' => '',
            'lastname' => '',
            'sex' => '',
            'tanggal_lahir' => '',
            'kode_rs' => '',
            'designation' => '',
            'address' => '',
            'phone' => '',
            'mobile' => '',
            'career_title' => '',
            'short_biography' => '',
            'specialist' => '',
            'degree' => '',
            'picture' => '',
            'tambah_employee' => '',
        ], [
            'username.unique' => 'Username Sudah Di Gunakan',
            'username.required' => 'Username Wajib Di isi',
            'user_role.required' => 'Peran Pengguna Wajib Di Pilih',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        $request['password'] = bcrypt($request->input('password'));
        User::create($request->post());

        return redirect()->route('human_resource.index')
            ->with('success', 'Data Berhasil Di Tambahkan.');
    }

    public function edit($id)
    {
        $item = User::where('user_id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.human_resource.edit', [
            'item' => $item,
        ]);
    }

    public function show($id)
    {
        $item = User::where('user_id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.human_resource.profile', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'username' => '',
                'password' => '',
                'user_role' => '',
                'tanggal_lahir' => '',
                'kode_rs' => '',
                'firstname' => '',
                'lastname' => '',
                'sex' => '',
                'designation' => '',
                'address' => '',
                'phone' => '',
                'mobile' => '',
                'career_title' => '',
                'short_biography' => '',
                'specialist' => '',
                'degree' => '',
                'picture' => '',
                'tambah_employee' => '',
            ],
            [
                'username.unique' => 'Username Sudah Di Gunakan',
            ]);
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('human_resource.index')
            ->with('success', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $item = User::where('user_id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $result = $item->delete();

        if (!$result) {
            return redirect('/dashboard/human_resource')->with('error', 'Data Gagal Di Hapus');
        }

        return redirect('/dashboard/human_resource')->with('success', 'Data Berhasil Di Hapus');
    }
}
