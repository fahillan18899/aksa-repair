<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\LkAlat;
use App\Models\Registrasi;
use App\Models\LkDentalUnit;
use Illuminate\Http\Request;

class LkAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inv = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $Inv2 = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $items = LkAlat::where('kode_rs', Auth::user()->kode_rs)->get();
        $items2 = LkDentalUnit::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.lk_alat.index' , [

            'Inv' => $Inv,
            'Inv2' => $Inv2,
            'items' => $items,
            'items2' => $items2,
        ]);
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
            'suhu' => '',
            'kelembapan' => '',
            'pemeriksa_kondisi' => 'array',
            'pemeriksa_kondisi.*.deskrip' => '',
            'pemeriksa_kondisi.*.kondisi' => '',
            'pemeriksa_kondisi.*.keterangan' => '',
            'listrik_1' => '',
            'listrik_2' => '',
            'listrik_3' => '',
            'listrik_4' => '',
            'judul' => 'array',
            'kinerja' => 'array',
            'kinerja.*.parameter' => '',
            'kinerja.*.setting' => '',
            'kinerja.*.terukur' => '',
            'kinerja.*.toleransi' => '',
            'kesimpulan_fisik_fungsi' => '',
            'kesimpulan_listrik' => '',
            'kesimpulan_kinerja' => '',
            'catatan' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        $data['alat_ukur'] = json_encode($request->alat_ukur); // Konversi array ke JSON
        $data['pemeriksa_kondisi'] = json_encode($request->pemeriksa_kondisi); // Konversi array ke JSON
        $data['kinerja'] = json_encode($request->kinerja); // Konversi array ke JSON
        $data['judul'] = json_encode($request->judul); // Konversi array ke JSON
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
        $item->alat_ukur = is_string($item->alat_ukur) ? json_decode($item->alat_ukur, true) : $item->alat_ukur;
        $item->pemeriksa_kondisi = is_string($item->pemeriksa_kondisi) ? json_decode($item->pemeriksa_kondisi, true) : $item->pemeriksa_kondisi;
        $item->kinerja = is_string($item->kinerja) ? json_decode($item->kinerja, true) : $item->kinerja;
        $item->judul = is_string($item->judul) ? json_decode($item->judul, true) ?? [] : $item->judul;
    
        return view('pages.admin.PPM.lk_alat.show_anestesi', compact('item'));
    }
    

    public function edit($id)
    {
        $item = LkAlat::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $Inv = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.lk_alat.edit_anestesi', [

            'Inv' => $Inv,
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alat' => '',
            'ruangan' => '',
            'operator_alat' => '',
            'alat' => '',
            'merek_tipe' => '',
            'no_seri' => '',
            'tanggal' => '',
            'pelaksana' => '',
            'ukur_merek1' => '',
            'ukur_tipe1' => '',
            'ukur_noseri1' => '',
            'ukur_merek2' => '',
            'ukur_tipe2' => '',
            'ukur_noseri2' => '',
            'suhu' => '',
            'kelembapan' => '',
            'fisik_fungsi_1' => '',
            'keterangan_1' => '',
            'fisik_fungsi_2' => '',
            'keterangan_2' => '',
            'fisik_fungsi_3' => '',
            'keterangan_3' => '',
            'fisik_fungsi_4' => '',
            'keterangan_4' => '',
            'fisik_fungsi_5' => '',
            'keterangan_5' => '',
            'fisik_fungsi_6' => '',
            'keterangan_6' => '',
            'fisik_fungsi_7' => '',
            'keterangan_7' => '',
            'fisik_fungsi_8' => '',
            'keterangan_8' => '',
            'fisik_fungsi_9' => '',
            'keterangan_9' => '',
            'fisik_fungsi_10' => '',
            'keterangan_10' => '',
            'fisik_fungsi_11' => '',
            'keterangan_11' => '',
            'fisik_fungsi_12' => '',
            'keterangan_12' => '',
            'fisik_fungsi_13' => '',
            'keterangan_13' => '',
            'listrik_1' => '',
            'listrik_2' => '',
            'listrik_3' => '',
            'listrik_4' => '',
            'jenis_gas' => '',
            'seting_alat_1' => '',
            'seting_alat_2' => '',
            'seting_alat_3' => '',
            'seting_alat_4' => '',
            'seting_alat_5' => '',
            'seting_alat_6' => '',
            'seting_alat_7' => '',
            'terukur_1' => '',
            'terukur_2' => '',
            'terukur_3' => '',
            'terukur_4' => '',
            'terukur_5' => '',
            'terukur_6' => '',
            'terukur_7' => '',
            'kesimpulan_fisik_fungsi' => '',
            'kesimpulan_listrik' => '',
            'kesimpulan_kinerja' => '',
            'catatan' => '',
            'kode_rs' => '',

        ]);
        $LkAlat = LkAlat::findOrFail($id);
        $LkAlat->update($request->all());

        return redirect('/dashboard/ppm/lk_alat')
        ->with('success', 'Data berhasil di Ubah');
    }

    public function destroy($id)
    {
        $item = LkAlat::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();

        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data User Berhasil di Hapus');
    }

    public function storeDentalUnit(Request $request)
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
            'ukur_merek1' => '',
            'ukur_tipe1' => '',
            'ukur_noseri1' => '',
            'ukur_merek2' => '',
            'ukur_tipe2' => '',
            'ukur_noseri2' => '',
            'ukur_merek3' => '',
            'ukur_tipe3' => '',
            'ukur_noseri3' => '',
            'suhu' => '',
            'kelembapan' => '',
            'fisik_fungsi_1' => '',
            'keterangan_1' => '',
            'fisik_fungsi_2' => '',
            'keterangan_2' => '',
            'fisik_fungsi_3' => '',
            'keterangan_3' => '',
            'fisik_fungsi_4' => '',
            'keterangan_4' => '',
            'fisik_fungsi_5' => '',
            'keterangan_5' => '',
            'fisik_fungsi_6' => '',
            'keterangan_6' => '',
            'fisik_fungsi_7' => '',
            'keterangan_7' => '',
            'fisik_fungsi_8' => '',
            'keterangan_8' => '',
            'fisik_fungsi_9' => '',
            'keterangan_9' => '',
            'fisik_fungsi_10' => '',
            'keterangan_10' => '',
            'listrik_1' => '',
            'listrik_2' => '',
            'listrik_3' => '',
            'listrik_4' => '',
            'kesimpulan_fisik_fungsi' => '',
            'kesimpulan_listrik' => '',
            'kesimpulan_kinerja' => '',
            'catatan' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        LkDentalUnit::create($data);
        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function editDentalUnit($id)
    {
        $item = LkDentalUnit::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $Inv = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.lk_alat.edit_dental_unit', [

            'Inv' => $Inv,
            'item' => $item,
        ]);
    }

    public function updateDentalUnit(Request $request, $id)
    {
        $request->validate([
            'id_alat' => '',
            'ruangan' => '',
            'operator_alat' => '',
            'alat' => '',
            'merek_tipe' => '',
            'no_seri' => '',
            'tanggal' => '',
            'pelaksana' => '',
            'ukur_merek1' => '',
            'ukur_tipe1' => '',
            'ukur_noseri1' => '',
            'ukur_merek2' => '',
            'ukur_tipe2' => '',
            'ukur_noseri2' => '',
            'ukur_merek3' => '',
            'ukur_tipe3' => '',
            'ukur_noseri3' => '',
            'suhu' => '',
            'kelembapan' => '',
            'fisik_fungsi_1' => '',
            'keterangan_1' => '',
            'fisik_fungsi_2' => '',
            'keterangan_2' => '',
            'fisik_fungsi_3' => '',
            'keterangan_3' => '',
            'fisik_fungsi_4' => '',
            'keterangan_4' => '',
            'fisik_fungsi_5' => '',
            'keterangan_5' => '',
            'fisik_fungsi_6' => '',
            'keterangan_6' => '',
            'fisik_fungsi_7' => '',
            'keterangan_7' => '',
            'fisik_fungsi_8' => '',
            'keterangan_8' => '',
            'fisik_fungsi_9' => '',
            'keterangan_9' => '',
            'fisik_fungsi_10' => '',
            'keterangan_10' => '',
            'listrik_1' => '',
            'listrik_2' => '',
            'listrik_3' => '',
            'listrik_4' => '',
            'kesimpulan_fisik_fungsi' => '',
            'kesimpulan_listrik' => '',
            'kesimpulan_kinerja' => '',
            'catatan' => '',
            'kode_rs' => '',

        ]);
        $LkDentalUnit = LkDentalUnit::findOrFail($id);
        $LkDentalUnit->update($request->all());

        return redirect('/dashboard/ppm/lk_alat')
        ->with('success', 'Data berhasil di Ubah');
    }

    public function showDentalUnit($id)
    {
        $item = LkDentalUnit::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.lk_alat.show_dental_unit', [

            'item' => $item,
        ]);
    }

    public function destroyDentalUnit($id)
    {
        $item = LkDentalUnit::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
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
