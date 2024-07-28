<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.home');
    }

    public function qrGen()
    {
        return view('pages.admin.qr_code');
    }

    public function createQrGen()
    {
        return view('pages.admin.createQr');
    }

    public function storeQrGen(Request $request)
    {
        $item = $request->validate([
            'kode' => 'required|max:16',
            'angka_awal' => 'required|max:16',
            'angka_akhir' => 'required|max:16',
        ], [
            'kode.required' => 'Kode wajib diisi',
            'kode.max' => 'Kode maksimal 16 karakter',
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
            'apiKey' => env('API_KEY'),
            'authDomain' => env('AUTH_DOMAIN'),
            'projectId' => env('PROJECT_ID'),
            'storageBucket' => env('STORAGE_BUCKET'),
            'messagingSenderId' => env('MESSAGE_SENDER_ID'),
            'appId' => env('APP_ID'),
            'measurementId' => env('MEASUREMENT_ID'),
        ];

        config(['services.firebase' => $firebaseConfig]);

        $topic = Auth::user()->kode_rs . Auth::user()->user_role;

        $body = [
            'to' => '/topics/' . $topic,
            'registration_tokens' => [env('TOPIC_REGISTRATION_KEY')],
        ];

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'key='.env('FCM_KEY'),
        ])
            ->post('https://iid.googleapis.com/iid/v1:batchRemove', $body);

        if ($response->successful()) {
            echo 'Unsubscribed successfully: ' . $response->body();
        } else {
            echo 'Error ' . $response->status() . ' - ' . $response->body();
        }

        // Tambahkan waktu delay sesuai kebutuhan (2 detik dalam contoh ini)
        sleep(2);

        return redirect()->back();
    }
}
