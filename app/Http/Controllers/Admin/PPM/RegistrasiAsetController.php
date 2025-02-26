<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Helper;
use App\Models\Alat;
use App\Models\Gedung;
use App\Models\Ruangan;
use App\Models\Nomklatur;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use App\Models\TambahJenisAlat;
use App\Models\TambahDistributor;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Imports\RegistrasiAsetsImport;
use Yajra\DataTables\Facades\DataTables;

class RegistrasiAsetController extends Controller
{
    private Helper $helper;

    public function __construct() {
        $this->helper = new Helper();
    }

    public function json()
    {
        $b = Registrasi::query()->select
        (['id_aset', 'jenis_alat', 'nomklatur', 
        'nama_alat', 'merek', 'type', 'gambar', 'serial_number',
        'lokasi_alat', 'tanggal_kalibrasi','distributor', 'distributor',
        'alamat_distributor', 'tlp_distributor','email_distributor', 'teknisi_distributor',
        'tlp_t_distributor','no_sertifikat_kalibrasi', 'teknisi_ppm','harga_perolehan','sumber_dana',
        'tahun_perolehan', 'akl', 'akd', 'no_inventaris_1','umur_alat', 'jadwal_pemeliharaan'])
        ->where('kode_rs', Auth::user()->kode_rs);
        return DataTables::eloquent($b)->make(false);

    }

    public function index()
    {
        $kode_rs   = Auth::user()->kode_rs;
        $alats     = Alat::where('kode_rs',$kode_rs)->get();
        $gedung    = Gedung::where('kode_rs',$kode_rs)->get();
        $ruangans  = Ruangan::where('kode_rs',$kode_rs)->get();
        $nomklatur = Nomklatur::where('kode_rs',$kode_rs)->get();
        $items     = Registrasi::where('kode_rs',$kode_rs)->get();
        $jenis     = TambahJenisAlat::where('kode_rs',$kode_rs)->get();
        $distribut = TambahDistributor::where('kode_rs',$kode_rs)->get();
        return view('pages.admin.PPM.registrasi_aset.index',
        compact('alats', 'gedung', 'ruangans', 'nomklatur', 'items', 'jenis', 'distribut'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'akd'                     => '',
            'akl'                     => '',
            'type'                    => 'required|max:50',
            'merek'                   => 'required|max:50',
            'gambar'                  => 'image|mimes:jpg,png,jpeg,svg|max:4096',
            'kode_rs'                 => '',
            'qr_code'                 => '',
            'id_aset'                 => 'required|unique:registrasis',
            'nomklatur'               => '',
            'nama_alat'               => 'required|max:50',
            'umur_alat'               => '',
            'jenis_alat'              => 'required|max:50',
            'lokasi_alat'             => 'required',
            'distributor'             => '',
            'sumber_dana'             => '',
            'teknisi_ppm'             => '',
            'serial_number'           => 'required|max:50',
            'tlp_distributor'         => '',
            'harga_perolehan'         => '',
            'tahun_perolehan'         => '',
            'penyusutan_aset'         => '',
            'no_inventaris_1'         => '',
            'no_inventaris_2'         => '',
            'tanggal_kalibrasi'       => '',
            'email_distributor'       => '',
            'tlp_t_distributor'       => '',
            'alamat_distributor'      => '',
            'teknisi_distributor'     => '',
            'jadwal_pemeliharaan'     => '',
            'no_sertifikat_kalibrasi' => '',
        ], [
            'id_aset.unique' => 'Id Sudah Digunakan',
            'gambar.image'   => 'Yang diupload bukan gambar',
            'gambar.max'     => 'Ukuran Gambar Maksimal 4MB',
            'gambar.mimes'   => 'Gambar Harus Berkstensi jpg,png,jpeg,svg',
        ]);

        if (isset($data['gambar'])) {
            $data['gambar'] = $request
            ->file('gambar')->store('assets/gallery','public'); 
        }

        $data['umur_alat'] = date('Y') - $data['tahun_perolehan'];
        if ($data['umur_alat'] > 0) {
            $data['penyusutan_aset'] = $this->helper
            ->hitung($data['umur_alat'], $data['tahun_perolehan']); } 
        else { $data['penyusutan_aset'] = 0; }

        $data['kode_rs'] = Auth::user()->kode_rs;
        Registrasi::create($data);
        session()->flash('success', 'Data berhasil disimpan');

        return redirect()->route('registrasi.index');
    }

    public function edit($id)
    {
        $kode_rs   = Auth::user()->kode_rs;
        $alats     = Alat::where('kode_rs', $kode_rs)->get();
        $ruangans  = Ruangan::where('kode_rs', $kode_rs)->get();
        $item      = Registrasi::where('id_aset', $id)->first();
        $nomklatur = Nomklatur::where('kode_rs', $kode_rs)->get();
        $distribut = TambahDistributor::where('kode_rs', $kode_rs)->get();

        return view('pages.admin.PPM.registrasi_aset.update', 
        compact('alats', 'item', 'ruangans', 'nomklatur', 'distribut'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'type'                    => '',
            'akl'                     => '',
            'akd'                     => '',
            'merek'                   => '',
            'gambar'                  => 'image|mimes:jpg,png,jpeg,svg|max:4096',
            'kode_rs'                 => '',
            'nomklatur'               => '',
            'nama_alat'               => '',
            'umur_alat'               => '',
            'jenis_alat'              => '',
            'lokasi_alat'             => '',
            'distributor'             => '',
            'teknisi_ppm'             => '',
            'sumber_dana'             => '',
            'serial_number'           => '',
            'tlp_distributor'         => '',
            'harga_perolehan'         => '',
            'tahun_perolehan'         => '',
            'no_inventaris_1'         => '',
            'penyusutan_aset'         => '',
            'no_inventaris_2'         => '',
            'email_distributor'       => '',
            'tanggal_kalibrasi'       => '',
            'tlp_t_distributor'       => '',
            'alamat_distributor'      => '',
            'teknisi_distributor'     => '',
            'jadwal_pemeliharaan'     => '',
            'no_sertifikat_kalibrasi' => '',
        ], [
            'gambar.image' => 'Yang diupload bukan gambar',
            'gambar.max'   => 'Ukuran Gambar Maksimal 4MB',
            'gambar.mimes' => 'Gambar Harus Berkstensi jpg,png,jpeg,svg',
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
        session()->flash('success', 'Data berhasil disimpan');

        return redirect()->route('registrasi.index');
    }

    public function destroy($id)
    {
        $item = Registrasi::where('id_aset', $id)
        ->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();

        return redirect()->route('registrasi.index')
        ->with('success', 'Data Registrasi Alat Berhasil Di Hapus.');
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

    public function getDistributor($namaDistributor)
    {
        $distributor = TambahDistributor::where("nama_distributor_p", $namaDistributor)->first();
        return response()->json($distributor ? [$distributor] : []);
    }
    

    public function getNomklatur($id)
    {
      $nomklatur = Nomklatur::where("nama_nomklatur", $id)->get();
      return json_encode($nomklatur);
    }

 // public function oldIndex()
    // {
    //     $kodeRs_ = Auth::user()->kode_rs;

    //     $data = DB::table('registrasis')
    //         ->select(DB::raw('max(id_aset) as maxIDASET'))
    //         ->where('kode_rs', $kodeRs_)
    //         ->first();
    //     $kodeAset = $data->maxIDASET;

    //     $urutan = (int) substr($kodeAset, 12, 13);
    //     $urutan++;

    //     $date = date('ymd');
    //     $kodeAset = $kodeRs_ . $date . sprintf('%05s', $urutan);

    //     $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
    //     $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
    //     $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
    //     return view('pages.admin.PPM.registrasi_aset.old-index', [
    //         'items' => $items,
    //         'kodeAset' => $kodeAset,
    //         'ruangans' => $ruangans,
    //         'alats' => $alats,
    //     ]);
    // }

}
