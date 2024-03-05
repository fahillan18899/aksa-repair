<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
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
        $topic = Auth::user()->kode_rs . Auth::user()->user_role;
        $this->unsubscribeFCMTopic($topic);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('login');
    }

    function unsubscribeFCMTopic($topic)
    {
        $serverKey = 'AAA655-gzI:APA91bGRVjsxkopYiQp_v1nQjASeYsyjBEhXKRkRC766APSytX9Evc6d5Noz1seTF3irwqi5rzbIDE2utWgld_Yr3Or1IZI67WPurKfvU9epaoaZg8v0fDspsXu5HicWWdJjVvf-YPAl';

        $headers = [
            'Authorization: Key=' . $serverKey,
            'Content-Type: Application/json'
        ];

        $data = [
            'to' => '/topics/' . $topic,
            'registration_tokens' => [],
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://iid.googleapis.com/iid/v1:batchRemove",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $headers
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            "cURL Error #:" . $err;
        } else {
            $response;
        }

        // Handle respons atau log jika diperlukan
    }

}
