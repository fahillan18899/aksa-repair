<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
            return redirect()->intended('/dashboard/home')
            ->withSuccess('Signed in');
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('pages.auth.register');
    }

    public function processRegistration(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:4',
            'user_role' => 'required',
            'kode_rs' => 'required',
        ], [
            'username.unique' => 'Username Sudah Di Gunakan',
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
