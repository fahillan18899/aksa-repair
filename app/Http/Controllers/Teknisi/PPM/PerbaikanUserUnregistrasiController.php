<?php

namespace App\Http\Controllers\Teknisi\PPM;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\PengembalianUnregistrasi;
use App\Models\PenghapusanUnregistrasi;
use App\Models\PengirimanUnregistrasi;
use App\Models\PerbaikanUnregistrasi;
use App\Models\StockOpname;
use App\Models\Ruangan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerbaikanUserUnregistrasiController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }
    public function index()
    {
        $perbaikan = PerbaikanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->where('active', 1)->get();
        $pengiriman = PengirimanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $pengembalian = PengembalianUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $penghapusan = PenghapusanUnregistrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $itemSperpart = StockOpname::where('kode_rs', Auth::user()->kode_rs)->get();
        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('perbaikan_unregistrasis')
            ->select(DB::raw('max(id_perbaikan_un) as idPerbaikanUn'))
            ->where('kode_rs', $kodeRs_)
            ->first();
            
        $kode_aset = $this->helper->formatKodeAset($data->idPerbaikanUn, $kodeRs_);

        return view('pages.teknisi.aset_unregistrasi.index', [

            'perbaikan' => $perbaikan,
            'pengiriman' => $pengiriman,
            'pengembalian' => $pengembalian,
            'penghapusan' => $penghapusan,
            'kode_aset' => $kode_aset,
            'alats' => $alats,
            'ruangans' => $ruangans,
            'teknisis' => $teknisis,
            'itemSperpart' => $itemSperpart,

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([

            'id_perbaikan_un' => '',
            'tanggal_perbaikan_un' => '',
            'nama_alat_un' => '',
            'merek_alat_un' => '',
            'type_alat_un' => '',
            'serial_number_un' => '',
            'lokasi_alat_un' => '',
            'pelapor_un' => '',
            'keterangan_un' => '',
            'ka_instalasi_un' => '',
            'teknisi_1_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'suku_cadang_un' => '',
            'volume_un' => '',
            'harga_satuan_un' => '',
            'jumlah_harga_un' => '',
            'keluhan_dari_alat_un' => '',
            'kode_rs' => '',
            'active' => '',

        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        PerbaikanUnregistrasi::create($request->post());

        return redirect('/dashboard_teknisi/perbaikan_unregistrasi')
            ->with('success', 'Data Perbaikan Berhasil Di Tambahkan.');
    }

    public function editun_teknisi($id)
    {
        $teknisis = Teknisi::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $item = PerbaikanUnregistrasi::where('id_perbaikan_un', $id)->first();

        return view('pages.teknisi.aset_unregistrasi.edit_perbaikan', [

            'ruangans' => $ruangans,
            'item' => $item,
            'teknisis' => $teknisis,
            'alats' => $alats,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_perbaikan_un' => '',
            'tanggal_perbaikan_un' => '',
            'nama_alat_un' => '',
            'merek_alat_un' => '',
            'type_alat_un' => '',
            'serial_number_un' => '',
            'lokasi_alat_un' => '',
            'pelapor_un' => '',
            'keterangan_un' => '',
            'ka_instalasi_un' => '',
            'teknisi_1_un' => '',
            'teknisi_2_un' => '',
            'teknisi_3_un' => '',
            'suku_cadang_un' => '',
            'volume_un' => '',
            'harga_satuan_un' => '',
            'jumlah_harga_un' => '',
            'keluhan_dari_alat_un' => '',
            'kode_rs' => '',

        ]);

        $perbaikanRegistrasi = PerbaikanUnregistrasi::findOrFail($id);
        $perbaikanRegistrasi->update($request->all());

        return redirect('/dashboard_teknisi/perbaikan_unregistrasi')
            ->with('success', 'Data Perbaikan Unregistrasi berhasil di Ubah');
    }

    public function cetak_teknisi($id)
    {
        $item = PerbaikanUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.teknisi.aset_unregistrasi.cetak_perbaikan', compact('item'));
    }

    public function updateStatusPerbaikanUnTeknisi($id)
    {
        $item = PerbaikanUnregistrasi::where('id_perbaikan_un', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
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
}
