<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\PengembalianRegistrasi;
use App\Models\PenghapusanRegistrasi;
use App\Models\PengirimanRegistrasi;
use App\Models\PerbaikanRegistrasi;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerbaikanRegistrasiController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function index()
    {
        $items = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();
        $result_pengiriman = PengirimanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();
        $result_penghapusan = PenghapusanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();
        $result_pengembalian = PengembalianRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();

        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('perbaikan_registrasis')
            ->select(DB::raw('max(id_perbaikan_reg) as idPerbaikan'))
            ->where('kode_rs', Auth::user()->kode_rs)
            ->first();
        $kodeAset = $data->idPerbaikan;

        $kode_aset = $this->helper->formatKodeAset($kodeAset, $kodeRs_);

        return view('pages.admin.PPM.aset_teregistrasi.index', [
            'items' => $items,
            'result_pengembalian' => $result_pengembalian,
            'result_penghapusan' => $result_penghapusan,
            'result_pengiriman' => $result_pengiriman,
            'kode_aset' => $kode_aset,
            'teknisis' => $teknisis,

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_perbaikan_reg' => 'unique:perbaikan_registrasis|required',
            'id_aset_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'suku_cadang' => '',
            'volume' => '',
            'harga_satuan' => '',
            'jumlah_harga' => '',
            'keluhan_dari_alat_reg' => '',
            'korektif_reg' => '',
            'active' => '',
        ]);

        $request['kode_rs'] = Auth::user()->kode_rs;
        PerbaikanRegistrasi::create($request->post());
        $token = Auth::user()->kode_rs;
        $level = 'user';
        $topik = $token . $level;
        $title = $request['nama_alat_reg'];
        $message = 'Alat ' . $title;
        $this->helper->sendPushNotification($title, $message, $topik, 'https://wyasaaplikasi.com/perbaikan_teregistrasi/perbaikanunreg');

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil Tambahkan.');
    }

    public function edit($id)
    {

        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();

        return view('pages.admin.PPM.aset_teregistrasi.update_perbaikan', [

            'alats' => $alats,
            'item' => $item,
            'teknisis' => $teknisis,
            'ruangans' => $ruangans,
        ]);

    }

    public function update(Request $request, $perbaikanRegistrasi)
    {
        $request->validate([
            'id_perbaikan_reg' => 'unique:perbaikan_registrasis',
            'id_aset_reg' => '',
            'tanggal_perbaikan_reg' => '',
            'nama_alat_reg' => '',
            'merek_alat_reg' => '',
            'type_alat_reg' => '',
            'serial_number_reg' => '',
            'lokasi_alat_reg' => '',
            'pelapor_reg' => '',
            'keterangan_kondisi_alat_reg' => '',
            'ka_instalasi_reg' => '',
            'teknisi_1_reg' => '',
            'teknisi_2_reg' => '',
            'teknisi_3_reg' => '',
            'keluhan_dari_alat_reg' => '',
            'korektif_reg' => '',
            'active' => '',
        ]);

        $perbaikanRegistrasi = PerbaikanRegistrasi::findOrFail($perbaikanRegistrasi);
        $perbaikanRegistrasi->update($request->post());

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil Ubah.');
    }

    public function cetak($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.aset_teregistrasi.cetak_perbaikan', compact('item'));
    }

    public function sperpart()
    {
        $items = PerbaikanRegistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();

        return view('pages.admin.PPM.aset_teregistrasi.sperpart_perbaikan', [
            'items' => $items,

        ]);
    }

    public function updateStatusPerbaikan($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
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

    public function destroy($id)
    {

        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard/ppm/aset_teregistrasi')->with('success', 'Data Berhasil Di Hapus.');
    }
}
