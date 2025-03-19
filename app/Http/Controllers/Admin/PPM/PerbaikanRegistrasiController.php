<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper;
use App\Models\Alat;
use App\Models\Ruangan;
use App\Models\Teknisi;
use App\Models\StockOpname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PerbaikanRegistrasi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\PengirimanRegistrasi;
use App\Models\PenghapusanRegistrasi;
use App\Models\PengembalianRegistrasi;

class PerbaikanRegistrasiController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function index()
    {
        $kodeRs              = Auth::user()->kode_rs;
        $teknisis            = Teknisi::where('kode_rs', $kodeRs)->get();
        $itemSperpart        = StockOpname::where('kode_rs', $kodeRs)->get();
        $itemPesanan         = DB::table('pesanans')->where('kode_rs', $kodeRs)->get();
        $items               = PerbaikanRegistrasi::where('kode_rs', $kodeRs)->where('active', 1)->get();
        $result_pengiriman   = PengirimanRegistrasi::where('kode_rs', $kodeRs)->where('active', 1)->get();
        $result_penghapusan  = PenghapusanRegistrasi::where('kode_rs', $kodeRs)->where('active', 1)->get();
        $result_pengembalian = PengembalianRegistrasi::where('kode_rs', $kodeRs)->where('active', 1)->get();
        

        $data = DB::table('perbaikan_registrasis')
                ->select(DB::raw('max(id_perbaikan_reg) as idPerbaikan'))
                ->where('kode_rs', Auth::user()->kode_rs)
                ->first();

        $kodeAset = $data->idPerbaikan;
        $kode_aset = $this->helper->formatKodeAsetB($kodeAset, $kodeRs);

        return view('pages.admin.PPM.aset_teregistrasi.index',
        compact('teknisis', 'itemSperpart', 'itemPesanan', 'items',
                'result_pengiriman', 'result_pengembalian', 'result_penghapusan', 'kode_aset'));
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
        $level = 'user';
        $topik = $token . $level;
        $title = $request['nama_alat_reg'];
        $message = 'Alat ' . $title;
        $this->helper->sendPushNotification($title, $message, $topik, 'https://wyasaaplikasi.com/dashboard_user/perbaikan_teregistrasi');

        return redirect()->route('aset_teregistrasi.index')
            ->with('success', 'Data Berhasil Tambahkan.');
    }

    public function edit($id)
    {
        $kodeRs   = Auth::user()->kode_rs;
        $alats    = Alat::where('kode_rs', $kodeRs)->get();
        $teknisis = Teknisi::where('kode_rs', $kodeRs)->get();
        $ruangans = Ruangan::where('kode_rs', $kodeRs)->get();
        $item     = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->first();

        return view('pages.admin.PPM.aset_teregistrasi.update_perbaikan',
        compact('alats', 'teknisis', 'ruangans', 'item'));

    }

    public function update(Request $request, $perbaikanRegistrasi)
    {
        $request->validate([
            'id_perbaikan_reg'  => '',
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

        return view('pages.admin.PPM.aset_teregistrasi.sperpart_perbaikan',compact('items'));
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

    public function kondisiAlat($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
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

    public function destroy($id)
    {
        $item = PerbaikanRegistrasi::where('id_perbaikan_reg', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();
        return redirect('/dashboard/ppm/aset_teregistrasi')->with('success', 'Data Berhasil Di Hapus.');
    }
}
