<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LkInspeksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LkInspeksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.PPM.lk_inspeksi.index');
    }

    public function data()
    {
        $data = LkInspeksi::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.lk_inspeksi.data',['data' => $data]);
    }

    public function state()
    {
        $states = DB::table('gedungs')->where('kode_rs', Auth::user()->kode_rs)
        ->distinct('nama_gedung')->pluck('nama_gedung', 'id_gedung');

        return view('pages.admin.PPM.lk_inspeksi.index', ['states' => $states,]);
    }

    public function city($id)
    {
        $cities = DB::table('registrasis')
            ->where('lokasi_alat', $id)->where('kode_rs', Auth::user()->kode_rs)->get();

        return json_encode($cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bulan_tahun' => 'required',
            'lokasi_alat' => 'required',
            'kode_rs' => 'required',
        ]);
    
        // Prepare an array of alat data using a loop
        $alatData = [];
    
        for ($i = 1; $i <= 110; $i++) {
            // Get the input values dynamically for each alat
            $nama_alat = $request->input("nama_alat_$i");
            $nomer_seri = $request->input("nomer_seri_$i");
            $periksa_fisik = $request->input("periksa_fisik_$i", 'Rusak');
            $lengkap_alat = $request->input("lengkap_alat_$i", 'Kurang');
            $fungsi_alat = $request->input("fungsi_alat_$i", 'Rusak');
            $catatan = $request->input("catatan_$i");
    
            // Only process non-empty inputs (if there's no alat data for a particular index, skip it)
            if ($nama_alat && $nomer_seri) {
                $alatData[] = [
                    'nama_alat' => $nama_alat,
                    'nomer_seri' => $nomer_seri,
                    'periksa_fisik' => $periksa_fisik,
                    'lengkap_alat' => $lengkap_alat,
                    'fungsi_alat' => $fungsi_alat,
                    'catatan' => $catatan
                ];
            }
        }
    
        // Insert the data for each alat
        foreach ($alatData as $data) {
            LkInspeksi::create([
                'bulan_tahun' => $request->bulan_tahun,
                'lokasi_alat' => $request->lokasi_alat,
                'kode_rs' => $request->kode_rs,
                'nama_alat' => $data['nama_alat'],
                'nomer_seri' => $data['nomer_seri'],
                'periksa_fisik' => $data['periksa_fisik'],
                'lengkap_alat' => $data['lengkap_alat'],
                'fungsi_alat' => $data['fungsi_alat'],
                'catatan' => $data['catatan'],
            ]);
        }
    
        return redirect('/dashboard/ppm/lk_inspeksi')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }
    
    public function destroyMultiple(Request $request)
    {

        if (!$request->has('ids')) {
            return response()->json(['message' => 'Tidak ada data yang dipilih'], 400);
        }
    
        LkInspeksi::whereIn('id', $request->ids)
            ->where('kode_rs', Auth::user()->kode_rs)
            ->delete();
    
        return response()->json(['message' => 'Data yang dipilih berhasil dihapus!']);
    }

}
