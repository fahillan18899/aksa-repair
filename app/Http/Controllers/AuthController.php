<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
            'user_role' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('password');
        $user = User::where('password', $credentials)->first();
        if ($user) {
            return redirect()->intended('dashboard/home')->withSuccess('Signed in');
        }
        return Redirect('login');



        // $credentials = $request->except(['_token']);

        // if (auth()->attempt($credentials)) {
        //     return redirect()->route('dashboard');
        // }

        // return redirect()->back()->with('message', 'Invalid credentials');
    }

    public function registration()
    {
        return view('register');
    }

    public function processRegistration(Request $request)
    {
        $request->validate([
            'user_role' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'user_role' => trim($request->user_role),
            'username' => strtolower($request->username),
            'password' => $request->password
        ]);

        return redirect()->route('login')->with('message', 'Your account is created');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
