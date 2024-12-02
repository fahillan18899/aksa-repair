<?php

namespace App\Http\Controllers\Admin\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\LkAlat;
use App\Models\Registrasi;
use App\Models\LkDentalUnit;
use App\Models\LkDhiatermy;
use App\Models\LkDoplerSimulator;
use App\Models\LkBedsideMonitor;
use App\Models\User;
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
        $Inv3 = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $Inv4 = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $Inv5 = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();
        $items = LkAlat::where('kode_rs', Auth::user()->kode_rs)->get();
        return view('pages.admin.PPM.lk_alat.index' , [

            'Inv' => $Inv,
            'Inv2' => $Inv2,
            'Inv3' => $Inv3,
            'Inv4' => $Inv4,
            'Inv5' => $Inv5,
            'items' => $items,
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

        $data['kode_rs'] = Auth::user()->kode_rs;
        LkAlat::create($data);
        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = LkAlat::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        return view('pages.admin.PPM.lk_alat.show_anestesi', [

            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = LkAlat::where('id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        $Inv = Registrasi::where('kode_rs', Auth::user()->kode_rs)->get();

        return view('pages.admin.PPM.lk_alat.edit_anestesi', [

            'Inv' => $Inv,
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

    public function storeDhiatermy(Request $request)
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
        LkDhiatermy::create($data);
        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function storeDopler(Request $request)
    {
        $data =  $request->validate([
            // PENDATAAN ALAT
            'id_alat' => '',
            'ruangan' => '',
            'operator_alat' => '',
            'alat' => '',
            'merek_tipe' => '',
            'no_seri' => '',
            'tanggal' => '',
            'pelaksana' => '',
            // ALAT UKUR
            'ukur_merek1' => '',
            'ukur_tipe1' => '',
            'ukur_noseri1' => '',
            'ukur_merek2' => '',
            'ukur_tipe2' => '',
            'ukur_noseri2' => '',
            'ukur_merek3' => '',
            'ukur_tipe3' => '',
            'ukur_noseri3' => '',
            'ukur_merek4' => '',
            'ukur_tipe4' => '',
            'ukur_noseri4' => '',
            // KONDISI RUANGAN
            'suhu' => '',
            'kelembapan' => '',
            // PEMERIKSAAN KONDISI
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
            // PENGUKURAN LISTRIK
            'listrik_1' => '',
            'listrik_2' => '',
            'listrik_3' => '',
            'listrik_4' => '',
            'listrik_5' => '',
            'listrik_6' => '',
            'listrik_7' => '',
            'listrik_8' => '',
            'listrik_9' => '',
            'listrik_10' => '',
            // PENGUKURAN KINERJA
            'hasil_pengukuran_30_1' => '',
            'hasil_pengukuran_30_2' => '',
            'hasil_pengukuran_30_3' => '',
            'hasil_pengukuran_30_4' => '',
            'hasil_pengukuran_30_5' => '',
            'hasil_pengukuran_30_6' => '',
            'hasil_pengukuran_60_1' => '',
            'hasil_pengukuran_60_2' => '',
            'hasil_pengukuran_60_3' => '',
            'hasil_pengukuran_60_4' => '',
            'hasil_pengukuran_60_5' => '',
            'hasil_pengukuran_60_6' => '',
            'hasil_pengukuran_120_1' => '',
            'hasil_pengukuran_120_2' => '',
            'hasil_pengukuran_120_3' => '',
            'hasil_pengukuran_120_4' => '',
            'hasil_pengukuran_120_5' => '',
            'hasil_pengukuran_120_6' => '',
            'hasil_pengukuran_180_1' => '',
            'hasil_pengukuran_180_2' => '',
            'hasil_pengukuran_180_3' => '',
            'hasil_pengukuran_180_4' => '',
            'hasil_pengukuran_180_5' => '',
            'hasil_pengukuran_180_6' => '',
            'hasil_pengukuran_240_1' => '',
            'hasil_pengukuran_240_2' => '',
            'hasil_pengukuran_240_3' => '',
            'hasil_pengukuran_240_4' => '',
            'hasil_pengukuran_240_5' => '',
            'hasil_pengukuran_240_6' => '',
            // KESIIMPULAN
            'kesimpulan_fisik_fungsi' => '',
            'kesimpulan_listrik' => '',
            'kesimpulan_kinerja' => '',
            'catatan' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        LkDoplerSimulator::create($data);
        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }

    public function storeBedside(Request $request)
    {
        $data =  $request->validate([
            // PENDATAAN ALAT
            'id_alat' => '',
            'ruangan' => '',
            'operator_alat' => '',
            'alat' => '',
            'merek_tipe' => '',
            'no_seri' => '',
            'tanggal' => '',
            'pelaksana' => '',
            // ALAT UKUR
            'ukur_merek1' => '',
            'ukur_tipe1' => '',
            'ukur_noseri1' => '',
            'ukur_merek2' => '',
            'ukur_tipe2' => '',
            'ukur_noseri2' => '',
            'ukur_merek3' => '',
            'ukur_tipe3' => '',
            'ukur_noseri3' => '',
            // KONDISI RUANGAN
            'suhu' => '',
            'kelembapan' => '',
            // PEMERIKSAAN KONDISI
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
            // PENGUKURAN LISTRIK
            'listrik_1' => '',
            'listrik_2' => '',
            'listrik_3' => '',
            'listrik_4' => '',
            // PENGUKURAN KINERJA
            'nilai_inbp_40' => '',
            'nilai_inbp_93' => '',
            'nilai_inbp_117' => '',
            'nilai_inbp_167' => '',
            'nilai_heart_30' => '',
            'nilai_heart_60' => '',
            'nilai_heart_90' => '',
            'nilai_heart_120' => '',
            'nilai_heart_180' => '',
            'nilai_heart_240' => '',
            'nilai_spo2_80' => '',
            'nilai_spo2_85' => '',
            'nilai_spo2_90' => '',
            'nilai_spo2_95' => '',
            'nilai_spo2_100' => '',
            'nilai_respirasi_10' => '',
            'nilai_respirasi_30' => '',
            'nilai_respirasi_40' => '',
            'nilai_respirasi_60' => '',
            'nilai_respirasi_80' => '',
            // KESIIMPULAN
            'kesimpulan_fisik_fungsi' => '',
            'kesimpulan_listrik' => '',
            'kesimpulan_kinerja' => '',
            'catatan' => '',
            'kode_rs' => '',
        ]);

        $data['kode_rs'] = Auth::user()->kode_rs;
        LkBedsideMonitor::create($data);
        return redirect('/dashboard/ppm/lk_alat')
            ->with('success', 'Data Alat Berhasil di Tambahkan.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
