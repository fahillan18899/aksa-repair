<?php

namespace App\Http\Controllers\User\PPM;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\PengembalianUnregistrasi;
use App\Models\PenghapusanUnregistrasi;
use App\Models\PengirimanUnregistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerbaikanUserUnregistrasiController extends Controller
{
    public function index()
    {
        $perbaikan = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();
        $pengiriman = PengirimanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $pengembalian = PengembalianUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $penghapusan = PenghapusanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();

        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('perbaikan_unregistrasis')
            ->select(DB::raw('max(id_perbaikan_un) as idPerbaikanUn'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAset = $data->idPerbaikanUn;

        $urutan = (int) substr($kodeAset, 15, 16);
        $urutan++;

        $huruf3 = 'U';
        $date3 = date('ymd');
        $kode_aset = $kodeRs_ . $huruf3 . $date3 . sprintf('%04s', $urutan);

        return view('pages.user.aset_unregistrasi.index', [

            'perbaikan' => $perbaikan,
            'pengiriman' => $pengiriman,
            'pengembalian' => $pengembalian,
            'penghapusan' => $penghapusan,
            'kode_aset' => $kode_aset,
            'alats' => $alats,
            'ruangans' => $ruangans,
            'teknisis' => $teknisis,

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_un' => 'required',
            'tanggal_perbaikan_un' => '',
            'nama_alat_un' => 'required',
            'merek_alat_un' => '',
            'type_alat_un' => '',
            'serial_number_un' => '',
            'lokasi_alat_un' => 'required',
            'pelapor_un' => '',
            'keterangan_un' => 'required',
            'ka_instalasi_un' => '',
            'teknisi_1_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'keluhan_dari_alat_un' => '',
            'kode_rs' => '',
            'active' => '',

        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        PerbaikanUnregistrasi::create($request->post());

        return redirect('/dashboard_user/perbaikan_unregistrasi')
            ->with('success', 'Data Perbaikan Berhasil Di Tambahkan.');
    }

    public function cetak($id)
    {
        $item = PerbaikanUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.ppm.aset_unregistrasi.cetak_perbaikan', compact('item'));
    }
}
