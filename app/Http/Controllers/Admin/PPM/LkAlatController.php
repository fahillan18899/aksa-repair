<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Models\LkAlat;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LkAlatController extends Controller
{

    public function index()
    {
        $items  = LkAlat::where('kode_rs', Auth::user()->kode_rs)->get();
        $Inv    = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $Inv2   = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.lk_alat.index', 
        compact('Inv', 'Inv2', 'items'));
    }

    public function store(Request $request)
    {
        $data =  $request->validate([
            'id_alat' => '',
            'ruangan' => '',
            'operator_alat' => '',
            'alat' => '',
            'merek_tipe' => '',
            'no_seri' => '',
            'tanggal' => '',
            'pelaksana' => '',
            'alat_ukur' => 'array', // Pastikan input dikirim sebagai array
            'alat_ukur.*.nama' => '',
            'alat_ukur.*.merek' => '',
            'alat_ukur.*.type' => '',
            'alat_ukur.*.noseri' => '',
            'pemeriksa_kondisi' => 'array',
            'pemeriksa_kondisi.*.deskrip' => '',
            'pemeriksa_kondisi.*.kondisi' => '',
            'pemeriksa_kondisi.*.keterangan' => '',
            'judul' => 'array',
            'kinerja' => 'array',
            'kinerja.*.parameter' => '',
            'kinerja.*.setting' => '',
            'kinerja.*.terukur' => '',
            'kinerja.*.toleransi' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        $data['judul'] = json_encode($request->judul); // Konversi array ke JSON
        $data['kinerja'] = json_encode($request->kinerja); // Konversi array ke JSON
        $data['alat_ukur'] = json_encode($request->alat_ukur); // Konversi array ke JSON
        $data['pemeriksa_kondisi'] = json_encode($request->pemeriksa_kondisi); // Konversi array ke JSON
        LkAlat::create($data);
        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function show($id)
    {
        $item = LkAlat::where('id', $id)
            ->where('kode_rs', Auth::user()->kode_rs)
            ->firstOrFail(); // Pastikan jika data tidak ditemukan, langsung error 404

        // Pastikan alat_ukur dalam bentuk array
        $item->judul = is_string($item->judul) ? json_decode($item->judul, true) ?? [] : $item->judul;
        $item->kinerja = is_string($item->kinerja) ? json_decode($item->kinerja, true) : $item->kinerja;
        $item->alat_ukur = is_string($item->alat_ukur) ? json_decode($item->alat_ukur, true) : $item->alat_ukur;
        $item->pemeriksa_kondisi = is_string($item->pemeriksa_kondisi) ? json_decode($item->pemeriksa_kondisi, true) : $item->pemeriksa_kondisi;
    
        return view('pages.admin.PPM.lk_alat.show_anestesi', compact('item'));
    }
    
    public function destroy($id)
    {
        $item = LkAlat::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $item->delete();

        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data User Berhasil di Hapus');
    }

        //Autofill Selected
        public function getLkAlat($id)
        {
          $lkAlat = Registrasi::where("id_aset", $id)->get();
          return json_encode($lkAlat);
        }
}
