<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Helper;
use App\Models\Alat;
use App\Models\Ruangan;
use App\Models\Teknisi;
use App\Models\Registrasi;
use App\Models\StockOpname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PerbaikanRegistrasi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PerbaikanTeregistrasiController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function index()
    {
        $teknisis     = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $itemSperpart = StockOpname::where('kode_rs', Auth::user()->kode_rs)->get();
        $itemPesanan  = DB::table('pesanans')->where('kode_rs', Auth::user()->kode_rs)->get();
        $items        = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();

        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('perbaikan_registrasis')
            ->select(DB::raw('max(id_perbaikan_reg) as idPerbaikan'))
            ->where('kode_rs', Auth::user()->kode_rs)
            ->first();
            
        $kode_aset = $this->helper->formatKodeAset($data->idPerbaikan, $kodeRs_);

        return view('pages.teknisi.aset_teregistrasi.index', 
        compact('teknisis', 'itemSperpart', 'itemPesanan', 'items', 'kode_aset'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg'  => 'unique:perbaikan_registrasis|required',
            'id_aset_reg'       => '',
            'nama_alat_reg'     => '',
            'merek_alat_reg'    => '',
            'type_alat_reg'     => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg'   => '',
            'korektif_reg'      => '',
            'foto_perbaikan'    => '',
            'active'            => '',
        ]);

        if (isset($request['foto_perbaikan'])) {
            $request['foto_perbaikan'] = $request->file('foto_perbaikan')->store(
                'assets/gallery',
                'public'
            );
        }

        $request['kode_rs'] = Auth::user()->kode_rs;
        PerbaikanRegistrasi::create($request->post());
        $token = Auth::user()->kode_rs;

        $this->sendPushNotification($request['nama_alat_reg'],
        'Alat '.$request['nama_alat_reg'], $token.'admin',
        'https://wyasaaplikasi.com/dashboard/ppm/aset_teregistrasi');

        return redirect()->route('teknisi.perbaikan_teknisi.index')
            ->with('success', 'Data Berhasil Tambahkan.');
    }

    public function create(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg'  => 'unique:perbaikan_registrasis|required',
            'id_aset_reg'       => '',
            'nama_alat_reg'     => '',
            'merek_alat_reg'    => '',
            'type_alat_reg'     => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg'   => '',
            'korektif_reg'      => '',
            'foto_perbaikan'    => '',
            'active'            => '',
        ]);

        if (isset($request['foto_perbaikan'])) {
            $request['foto_perbaikan'] = $request->file('foto_perbaikan')->store(
                'assets/gallery',
                'public'
            );
        }

        $request['kode_rs'] = Auth::user()->kode_rs;
        // Cek stok
        $stock = StockOpname::where('nama', $request->suku_cadang)->first();
        if (!$stock || $stock->stock < $request->volume) {
            return back()->with('error', "Stok {$request->suku_cadang} tidak cukup!");
        }
        PerbaikanRegistrasi::create($request->post());
        // Kurangi stok
        $stock->decrement('stock', $request->volume);
        $token = Auth::user()->kode_rs;
        $level = 'user';
        $topik = $token . $level;
        $title = $request['nama_alat_reg'];
        $message = 'Alat ' . $title;
        $this->helper->sendPushNotification($title, $message, $topik, 'https://wyasaaplikasi.com/dashboard_user/perbaikan_teregistrasi');

        return redirect()->route('teknisi.perbaikan_teknisi.index')
            ->with('success', 'Data Berhasil Tambahkan.');
    }

    public function edit_teknisi($id)
    {

        $alats    = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item     = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();

        return view('pages.teknisi.aset_teregistrasi.update_perbaikan',
        compact('alats', 'teknisis', 'ruangans', 'item'));

    }

    public function update_teknisi(Request $request, $perbaikanRegistrasi)
    {
        $request->validate([
            'id_perbaikan_reg'      => 'unique:perbaikan_registrasis',
            'id_aset_reg'           => '',
            'tanggal_perbaikan_reg' => '',
            'nama_alat_reg'         => '',
            'merek_alat_reg'        => '',
            'type_alat_reg'         => '',
            'serial_number_reg'     => '',
            'lokasi_alat_reg'       => '',
            'pelapor_reg'           => '',
            'ka_instalasi_reg'      => '',
            'teknisi_1_reg'         => '',
            'teknisi_2_reg'         => '',
            'teknisi_3_reg'         => '',
            'teknisi_4_reg'         => '',
            'teknisi_5_reg'         => '',
            'keluhan_dari_alat_reg' => '',
            'korektif_reg'          => '',
            'foto_perbaikan'        => '',
            'active'                => '',
        ]);

        if (isset($request['foto_perbaikan'])) {
            $request['foto_perbaikan'] = $request->file('foto_perbaikan')->store(
                'assets/gallery',
                'public'
            );
        }

        $perbaikanRegistrasi = PerbaikanRegistrasi::findOrFail($perbaikanRegistrasi);
        $perbaikanRegistrasi->update($request->post());

        return redirect()->route('teknisi.perbaikan_teknisi.index')
            ->with('success', 'Data Berhasil Diubah.');
    }

    public function cetak_teknisi($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)
        ->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.teknisi.aset_teregistrasi.cetak_perbaikan', compact('item'));
    }

    public function qrCodeGenerate($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();

        return view('pages.teknisi.aset_teregistrasi.qr_code', compact('item'));
    }

    public function updateStatusPerbaikanTeknisi($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)
        ->where('kode_rs', Auth::user()->kode_rs)->first();
        if ($item) {
            if ($item->status == '0') {
                $item->status = '1';
            } else {
                $item->status = '0';
            }

            $item->save();
        }
        return back();
    }

    public function updateKondisiAlat($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)
        ->where('kode_rs', Auth::user()->kode_rs)->first();
        if ($item) {
            if ($item->keterangan_kondisi_alat_reg == '0') {
                $item->keterangan_kondisi_alat_reg = '1';
            } else {
                $item->keterangan_kondisi_alat_reg = '0';
            }

            $item->save();
        }
        return back();
    }

    public function sendPushNotification($title, $message, $topic, $clickActionUrl)
    {
        $header = [
            'Authorization: Key=' . env('SIMRS_FCM_KEY'),
            'Content-Type: Application/json',
        ];

        $msg = [
            'title' => $title,
            'body' => $message,
            'sound' => 'default',
            'icon' => '/999.png',
            'click_action' => $clickActionUrl,
        ];

        $payload = [
            'condition' => "'{$topic}' in topics",
            'data' => $msg,
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => $header,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            'cURL Error #:' . $err;
        } else {
            return $response;
        }
    }
}
