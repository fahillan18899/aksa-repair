<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Imports\RegistrasiAsetsImport;
use App\Models\Alat;
use App\Models\LembarPemeliharaan;
use App\Models\Registrasi;
use App\Models\Ruangan;
use App\Models\Gedung;
use App\Models\TambahJenisAlat;
use App\Models\TambahDistributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class RegistrasiAsetController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function json()
    {
        $b = Registrasi::query()->select(['id_aset', 'jenis_alat', 'nama_alat', 'merek', 'type', 'gambar', 'serial_number', 'lokasi_alat', 'tanggal_kalibrasi', 'distributor', 'distributor', 'alamat_distributor', 'tlp_distributor', 'email_distributor', 'teknisi_distributor', 'tlp_t_distributor', 'no_sertifikat_kalibrasi', 'teknisi_ppm', 'harga_perolehan', 'sumber_dana', 'tahun_perolehan', 'akl', 'akd', 'no_inventaris_1', 'umur_alat', 'jadwal_pemeliharaan'])->where('kode_rs', Auth::user()->kode_rs);
        $c = DataTables::eloquent($b)->make(false);

        return $c;

    }

    public function oldIndex()
    {
        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('registrasis')
            ->select(DB::raw('max(id_aset) as maxIDASET'))
            ->where('kode_rs', $kodeRs_)
            ->first();
        $kodeAset = $data->maxIDASET;

        $urutan = (int) substr($kodeAset, 12, 13);
        $urutan++;

        $date = date('ymd');
        $kodeAset = $kodeRs_ . $date . sprintf('%05s', $urutan);

        $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.registrasi_aset.old-index', [
            'items' => $items,
            'kodeAset' => $kodeAset,
            'ruangans' => $ruangans,
            'alats' => $alats,
        ]);
    }

    public function index()
    {
        $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $gedung = Gedung::where('kode_rs', Auth::user()->kode_rs)->get();
        $jenis = TambahJenisAlat::where('kode_rs', Auth::user()->kode_rs)->get();
        $distribut = TambahDistributor::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.registrasi_aset.index', [
            'items' => $items,
            'ruangans' => $ruangans,
            'gedung' => $gedung,
            'alats' => $alats,
            'jenis' => $jenis,
            'distribut' => $distribut
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_aset' => 'required|unique:registrasis',
            'qr_code' => '',
            'jenis_alat' => 'required|max:50',
            'nama_alat' => 'required|max:50',
            'merek' => 'required|max:50',
            'type' => 'required|max:50',
            'serial_number' => 'required|max:50',
            'gambar' => 'image|mimes:jpg,png,jpeg,svg|max:4096',
            'lokasi_alat' => 'required',
            'tanggal_kalibrasi' => '',
            'distributor' => '',
            'alamat_distributor' => '',
            'tlp_distributor' => '',
            'email_distributor' => '',
            'teknisi_distributor' => '',
            'tlp_t_distributor' => '',
            'no_sertifikat_kalibrasi' => '',
            'teknisi_ppm' => '',
            'harga_perolehan' => '',
            'sumber_dana' => '',
            'tahun_perolehan' => '',
            'kode_rs' => '',
            'jadwal_pemeliharaan' => '',
            'umur_alat' => '',
            'no_inventaris_1' => '',
            'no_inventaris_2' => '',
            'akl' => '',
            'akd' => '',
            'penyusutan_aset' => '',
        ], [
            'gambar.image' => 'Yang diupload bukan gambar',
            'gambar.mimes' => 'Gambar Harus Berkstensi jpg,png,jpeg,svg',
            'gambar.max' => 'Ukuran Gambar Maksimal 4MB',
            'id_aset.unique' => 'Id Sudah Digunakan',
        ]);

        if (isset($data['gambar'])) {
            $data['gambar'] = $request->file('gambar')->store(
                'assets/gallery',
                'public'
            );
        }

        $data['umur_alat'] = date('Y') - $data['tahun_perolehan'];

        if ($data['umur_alat'] > 0) {
            $data['penyusutan_aset'] = $this->helper->hitung($data['umur_alat'], $data['tahun_perolehan']);
        } else {
            $data['penyusutan_aset'] = 0;
        }
        $data['kode_rs'] = Auth::user()->kode_rs;

        $res = [
            'tanggal' => $data['tanggal_kalibrasi'],
            'kegiatan' => 'Pemelihraan',
            'engineer' => '',
            'id_aset' => $data['id_aset'],
            'qr_code' => '',
            'nama_alat' => $data['nama_alat'],
            'serial_number' => $data['serial_number'],
            'merek' => $data['merek'],
            'instalasi' => '',
            'tipe' => $data['type'],
            'ruangan' => $data['lokasi_alat'],
            'hand_hygiene' => '',
            'menyiapkan_alat_dan_bahan' => '',
            'alat_pelindung_diri' => '',
            'mengoprasikan_alat_kalibrasi' => '',
            'ktd' => '',
            'mengoprasikan_alat' => '',
            'identifikasi_bahaya' => '',
            'badan_selungkup1' => '',
            'badan_selungkup2' => '',
            'alat_sistem_interlock1' => '',
            'alat_sistem_interlock2' => '',
            'kabel_kelenturan1' => '',
            'kabel_kelenturan2' => '',
            'sistem_pengunci1' => '',
            'sistem_pengunci2' => '',
            'tombol_saklar1' => '',
            'tombol_saklar2' => '',
            'label_penandaan1' => '',
            'label_penandaan2' => '',
            'display_layar1' => '',
            'display_layar2' => '',
            'aksesoris1' => '',
            'aksesoris2' => '',
            'indikator_bunyi1' => '',
            'indikator_bunyi2' => '',
            'pembersihan' => '',
            'pengencangan_bagian_alat' => '',
            'pelumasan' => '',
            'kalibrasi_berkala' => '',
            'penggantian_bahan_habis_pakai' => '',
            'cek_alat' => '',
            'nama_sukucadang' => '',
            'volume' => '',
            'harga_satuan' => '',
            'jumlah_harga' => '',
            'evaluasi' => '',
            'status' => '',
            'status1' => '',
            'mulai_bekerja' => '',
            'selesai_kerja' => '',
            'durasi' => '',
            'user' => '',
            'engginer' => '',
            'kode_rs' => '',
        ];

        $res['kode_rs'] = Auth::user()->kode_rs;

        if (isset($data['tanggal_kalibrasi'])) {
            LembarPemeliharaan::create($res);
        }

        Registrasi::create($data);

        return redirect('/dashboard/ppm/registrasi-aset')
        ->with('success', 'Data Registrasi Alat Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        $distribut = TambahDistributor::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.registrasi_aset.update', [
            'ruangans' => $ruangans,
            'alats' => $alats,
            'item' => $item,
            'distribut' => $distribut,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jenis_alat' => '',
            'nama_alat' => '',
            'merek' => '',
            'type' => '',
            'gambar' => 'image|mimes:jpg,png,jpeg,svg|max:4096',
            'serial_number' => '',
            'lokasi_alat' => '',
            'tanggal_kalibrasi' => '',
            'distributor' => '',
            'alamat_distributor' => '',
            'tlp_distributor' => '',
            'email_distributor' => '',
            'teknisi_distributor' => '',
            'tlp_t_distributor' => '',
            'no_sertifikat_kalibrasi' => '',
            'teknisi_ppm' => '',
            'harga_perolehan' => '',
            'sumber_dana' => '',
            'tahun_perolehan' => '',
            'kode_rs' => '',
            'jadwal_pemeliharaan' => '',
            'umur_alat' => '',
            'no_inventaris_1' => '',
            'no_inventaris_2' => '',
            'akl' => '',
            'akd' => '',
            'penyusutan_aset' => '',
        ], [
            'gambar.image' => 'Yang diupload bukan gambar',
            'gambar.mimes' => 'Gambar Harus Berkstensi jpg,png,jpeg,svg',
            'gambar.max' => 'Ukuran Gambar Maksimal 4MB',
        ]);
        if (isset($data['gambar'])) {
            $data['gambar'] = $request->file('gambar')->store(
                'assets/gallery',
                'public'
            );
        }
        $data['umur_alat'] = date('Y') - $data['tahun_perolehan'];
       
        $data['penyusutan_aset'] = $this->helper->hitungPenyusutan($data['umur_alat'], $request->tahun_perolehan);
        $data['kode_rs'] = Auth::user()->kode_rs;

        $registrasi = Registrasi::findOrFail($id);
        $registrasi->update($data);

        return redirect('/dashboard/ppm/registrasi-aset')
        ->with('success', 'Data Registrasi Alat Berhasil Di Ubah.');
    }

    public function destroy($id)
    {

        $item = Registrasi::where('id_aset', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard/ppm/registrasi-aset')->with('success', 'Data Registrasi Alat Berhasil Di Hapus.');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new RegistrasiAsetsImport, $file);

        return back()->with('success', 'Products imported successfully.');
    }

    public function export()
    {
        $file = 'template_reg.xlsx';
        $path = storage_path('app/public/' . $file);

        return response()->download($path);
    }

    public function getDistributor($id)
    {
      $distributor = TambahDistributor::where("nama_distributor_p", $id)->get();
      return json_encode($distributor);
    }
}
