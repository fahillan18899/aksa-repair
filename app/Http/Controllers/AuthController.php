<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('pages.auth.login');
    }

    public function processLogin(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route("data.dashboard");
        }

        return redirect('/')->withSuccess('Detail Login Tidak Valid');
    }

    public function registration()
    {
        return view('pages.auth.register');
    }

    public function scanner()
    {
        return view('pages.auth.scan');
    }

    public function processRegistration(Request $request)
    {
        $data = $request->validate([
            'username' => 'nullable|string|max:255|unique:users',
            'password' => 'nullable|string|min:4',
            'user_role' => 'nullable',
            'kode_rs' => 'nullable',
            'rs' => 'nullable',
            'divisi' => 'nullable',
            'rs_divisi' => 'nullable',
        ], [
            'username.unique' => 'Username Sudah Di Gunakan',
            'password.required' => 'Password Wajib Diisi',
            'user_role.required' => 'Peran Pengguna Wajib Di Pilih',
            'kode_rs.required' => 'Fasilitas Kesehatan Wajib Di Pilih',
        ]);

        $data['password'] = bcrypt($request->input('password'));
        User::create($data);

        return redirect()->route('login')->with('success', 'Registrasi berhasil');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
