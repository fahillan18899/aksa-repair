<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use Illuminate\Http\Request;
use App\Models\Registrasi;
use App\Models\Ruangan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegistrasiAsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodeRs_ = Auth::user()->kode_rs;

        $data = DB::table('registrasis')
        ->select(DB::raw('max(id_aset) as maxIDASET'))
         ->where('kode_rs', $kodeRs_)
        ->first();
        $kodeAset = $data->maxIDASET;

        $urutan = (int)substr($kodeAset, 12, 13);
        $urutan++;

        $date  = date('ymd');
        $kodeAset  = $kodeRs_ . $date . sprintf("%05s", $urutan);

        $items = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $alats = Alat::all();
        $ruangans = Ruangan::all();
        return view('pages.admin.PPM.registrasi_aset.index', [
            'items' => $items,
            'kodeAset' => $kodeAset,
            'ruangans' => $ruangans,
            'alats' => $alats,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_aset' => 'required',
            'jenis_alat' => 'required',
            'nama_alat' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'serial_number' => 'required',
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
            'penyusutan_aset' => ''
        ]);

        $data['umur_alat'] = date("Y") - $data['tahun_perolehan'];
        function hitung($tahunPenyusutan, $harga_perolehan)
        {
            $b = 100 / $tahunPenyusutan;
            $c = $b / 12;
            $nilai =  $c / 100 * $harga_perolehan;
            return $nilai;
        }
        $data['penyusutan_aset'] = hitung($data['umur_alat'], $data['tahun_perolehan']);
        $data['kode_rs'] =  Auth::user()->kode_rs;

        Registrasi::create($data);


        return redirect()->route('registrasi.index')
        ->with('success', 'Data Registrasi Alat Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Registrasi::where('id_aset', $id)->first();
        $alats = Alat::all();
        $ruangans = Ruangan::all();
        return view('pages.admin.PPM.registrasi_aset.update', [
            'ruangans' => $ruangans,
            'alats' => $alats,
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jenis_alat' => '',
            'nama_alat' => '',
            'merek' => '',
            'type' => '',
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
        ]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item = Registrasi::where('id_aset', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect()->route('registrasi.index')->with('success', 'Data Registrasi Alat Berhasil Di Hapus.');
    }
}
