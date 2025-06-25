<?php

namespace App\Http\Controllers\Admin;

use App\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private Helper $helper;

    public function __construct()
    {
        $this->helper = new Helper();
    }

    public function notifyUser(Request $request)
    {
        $token = Auth::user()->kode_rs;
        $level = 'user';
        $topik = $token . $level;
        $clickActionUrl = 'https://wyasaaplikasi.com/dashboard_user/perbaikan_teregistrasi';
        $title = 'a';
        $message = 'Alat ' . $title;
        // create run the method from App/Helpers.php

        $this->helper->sendPushNotification($title, $message, $topik, $clickActionUrl);
    }

    public function dashboard()
    {
        $kodeRs = Auth::user()->kode_rs; // Mengambil kode_rs dari user yang sudah login

        return view('pages.admin.PPM.dashboard.index');
    }


}
