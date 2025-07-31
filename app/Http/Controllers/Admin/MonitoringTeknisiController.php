<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataBarang;
use App\Models\Informasi;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class MonitoringTeknisiController extends Controller
{
    public function getApproval()
    {
        $data = DataBarang::where('status', '1')->get();
        return view('pages.admin.monitoring_teknisi.approval',
        compact('data'));
    }

    public function getAlatKembali()
    {
        $data = DataBarang::where('status', '0')->get();
        return view('pages.admin.monitoring_teknisi.alat_kembali',
        compact('data'));
    }

    public function getInformasi()
    {
        $data = Informasi::all();
        return view('pages.admin.monitoring_teknisi.informasi',
        compact('data'));
    }

    public function getBeritaAcara()
    {
        $items = BeritaAcara::all();
        // perulangan array
        foreach ($items as $item) {
        if (is_string($item->rs)) {
            $item->rs = json_decode($item->rs, true);
        }
    }
        return view('pages.admin.monitoring_teknisi.berita_acara',
        compact('items'));
    }

    public function viewBa($id)
    {
        $item = BeritaAcara::findOrFail($id);

        //Mengubah data menjadi array
        $item->ba = is_string($item->ba) ? json_decode($item->ba, true) : $item->ba;
        $item->rs = is_string($item->rs) ? json_decode($item->rs, true) : $item->rs;
        $item->kontak = is_string($item->kontak) ? json_decode($item->kontak, true) : $item->kontak;
        $item->alat = is_string($item->alat) ? json_decode($item->alat, true) : $item->alat;
        $item->jenis = is_string($item->jenis) ? json_decode($item->jenis, true) : $item->jenis;
        $item->skc = is_string($item->skc) ? json_decode($item->skc, true) : $item->skc;
        return view('pages.admin.monitoring_teknisi.view_ba',
        compact('item'));
    }

}
