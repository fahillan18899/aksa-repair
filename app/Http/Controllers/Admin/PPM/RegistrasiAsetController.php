<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Exports\RegistrasiAssetsExport;
use App\Http\Controllers\Controller;
use App\Imports\RegistrasiAsetsImport;
use App\Models\Alat;
use App\Models\LembarPemeliharaan;
use Illuminate\Http\Request;
use App\Models\Registrasi;
use App\Models\Ruangan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
 use DataTables;

class RegistrasiAsetController extends Controller
{

    public function json (){
         $b = Registrasi::query()->select(['id_aset', 'jenis_alat','nama_alat','merek','type','gambar','serial_number','lokasi_alat','tanggal_kalibrasi','distributor', 'distributor','alamat_distributor','tlp_distributor','email_distributor','teknisi_distributor','tlp_t_distributor','no_sertifikat_kalibrasi','teknisi_ppm','harga_perolehan','sumber_dana','tahun_perolehan','akl','akd','no_inventaris_1','umur_alat','jadwal_pemeliharaan'])->where('kode_rs', Auth::user()->kode_rs);
         $c = Datatables::eloquent($b)->make(false);
        return $c;
        
    }
    
    public function index()
    {
        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('registrasis')
        ->select(DB::raw('max(qr_code) as maxIDASET'))
        ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeAset = $data->maxIDASET;

        $urutan = (int)substr($kodeAset, 3, 4);
        $urutan++;

        $string = "QR";

        $kodeAset  = $string  . sprintf("%04s", $urutan);

        $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.registrasi_aset.index', [
            'items' => $items,
            'kodeAset' => $kodeAset,
            'ruangans' => $ruangans,
            'alats' => $alats,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_aset' => 'required|unique:registrasis',
            'qr_code' => '',
            'jenis_alat' => 'required',
            'nama_alat' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'serial_number' => 'required',
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
            'penyusutan_aset' => ''
        ], [
            'gambar.image' => 'Yang diupload bukan gambar',
            'gambar.mimes' => 'Gambar Harus Berkstensi jpg,png,jpeg,svg',
            'gambar.max' => 'Ukuran Gambar Maksimal 4MB',
            'id_aset.unique' => 'Id Sudah Digunakan'
        ]);

        if (isset($data['gambar'])) {
            $data['gambar'] = $request->file('gambar')->store(
                'assets/gallery',
                'public'
            );
        }


        $data['umur_alat'] = date("Y") - $data['tahun_perolehan'];
        function hitung($tahunPenyusutan, $harga_perolehan)
        {
            $b = 100 / $tahunPenyusutan;
            $c = $b / 12;
            $nilai =  $c / 100 * $harga_perolehan;
            return $nilai;
        }
        if($data['umur_alat'] > 0 ){ 
            $data['penyusutan_aset'] = hitung($data['umur_alat'], $data['tahun_perolehan']);
        } else {
            $data['penyusutan_aset'] = 0;
        }
        $data['kode_rs'] =  Auth::user()->kode_rs;

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
            'kode_rs' => ''
        ];

        $res['kode_rs'] = Auth::user()->kode_rs;
        if (isset($data['tanggal_kalibrasi'])) {
            LembarPemeliharaan::create($res);
        }

        Registrasi::create($data);


        return redirect()->route('registrasi.index')
        ->with('success', 'Data Registrasi Alat Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        $alats = Alat::where('kode_rs', Auth::user()->kode_rs)->get();
        $ruangans = Ruangan::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.registrasi_aset.update', [
            'ruangans' => $ruangans,
            'alats' => $alats,
            'item' => $item,
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
            'penyusutan_aset' => ''
        ], [
            'gambar.image' => 'Yang diupload bukan gambar',
            'gambar.mimes' => 'Gambar Harus Berkstensi jpg,png,jpeg,svg',
            'gambar.max' => 'Ukuran Gambar Maksimal 4MB'
        ]);
        if (isset($data['gambar'])) {
            $data['gambar'] = $request->file('gambar')->store(
                'assets/gallery',
                'public'
            );
        }
        $data['umur_alat'] = date("Y") - $request->tahun_perolehan;
        function hitungPenyusutan($tahunPenyusutan, $harga_perolehan)
        {
            $b = 100 / $tahunPenyusutan;
            $c = $b / 12;
            $nilai =  $c / 100 * $harga_perolehan;
            return $nilai;
        }
        $data['penyusutan_aset'] = hitungPenyusutan($data['umur_alat'], $request->tahun_perolehan);
        $data['kode_rs'] =  Auth::user()->kode_rs;

        $registrasi = Registrasi::findOrFail($id);
        $registrasi->update($data);


        return redirect()->route('registrasi.index')
        ->with('success', 'Data Registrasi Alat Berhasil Di Ubah.');
    }

    public function destroy($id)
    {

        $item = Registrasi::where('id_aset', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect()->route('registrasi.index')->with('success', 'Data Registrasi Alat Berhasil Di Hapus.');
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
    
}
