<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    function index()
    {
        return view('pages.admin.home');
    }

    function qrGen()
    {
        return view('pages.admin.qr_code');
    }

    function createQrGen()
    {
        return view('pages.admin.createQr');
    }

    function storeQrGen(Request $request)
    {
        $item = $request->validate([
            'kode' => 'required|max:2',
            'angka_awal' => 'required|max:5',
            'angka_akhir' => 'required|max:5',
        ], [
            'kode.required' => 'Kode wajib diisi',
            'kode.max' => 'Kode maksimal 2 karakter',
        ]);
        $item['kode'] = strtoupper($item['kode']);
        return view('pages.admin.qr_code', [
            'item' => $item,
        ]);
    }

    public function unsubscribeFCMTopic()
    {
        // Inisialisasi Firebase
        $firebaseConfig = [
            'apiKey' => 'AIzaSyA0md7L4kCUzhja7dnAxpiYN_KzVfZl0o8',
            'authDomain' => 'wyasa-notif.firebaseapp.com',
            'projectId' => 'wyasa-notif',
            'storageBucket' => 'wyasa-notif.appspot.com',
            'messagingSenderId' => '458907715979',
            'appId' => '1:458907715979:web:f718256ae1736fddaa078e',
            'measurementId' => 'G-3S820797YB'
        ];

        config(['services.firebase' => $firebaseConfig]);


        $topic = Auth::user()->kode_rs . Auth::user()->user_role;
        $tokenNotif = session('tokenNotif');

        $body = [
            'to' => '/topics/' . $topic,
            'registration_tokens' => ['fbYEbJgdaqbb3N0RPTHZfX:APA91bFqSpC0XZuWa0Aj77IHYxl5LGXUAk-hhC0jHiRPrirKaohjAucHn2Ifp2caCnglFpJ2wU5kaBEE5DvJrdGdG7oCSXoaYDUm0KV_Xmj8cYIwLnMRknHRq0MZJUaUJg3lXq5JY5ur']
        ];


        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'key=AAAAatkICYs:APA91bGcQtde2KpTOZEmKmzYJU_VrfBuYeCw79SElSS2QRkyl0XTIro0wJBnhE1kJvHllpzWSS8doQQRS1OLPV6cnhZOJW8Z2S97RAApwUPusTji6VQpYjpzYXjyqCVjMAFHHojxMK0b'
        ])
            ->post('https://iid.googleapis.com/iid/v1:batchRemove', $body);
            
            if ($response->successful()) {
                echo 'Unsubscribed successfully: ' . $response->body();
            } else {
                echo 'Error ' . $response->status() . ' - ' . $response->body();
            }
            
            // Tambahkan waktu delay sesuai kebutuhan (2 detik dalam contoh ini)
            sleep(2);
            return redirect('/dashboard/ppm/home');
    }
}
