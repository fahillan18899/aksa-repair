<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inv;
use App\Models\Perbaikan;
use App\Models\pelihara;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MonitoringController extends Controller
{
    public function dashboardPpm()
    {
        // PERBAIKAN
        $totalAlat = Inv::count();
        $alatDiperbaiki = Perbaikan::count();
        $alatNormal = max(0, $totalAlat - $alatDiperbaiki);

        // PELIHARA
        $alatDipelihara = pelihara::count();
        $alatBelumDipelihara = max(0, $totalAlat - $alatDipelihara);

        // BAR CHART PERBAIKAN PER BULAN
        $perbaikanBulanan = Perbaikan::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();
        $dataPerbaikanBulanan = [];
        for ($i = 1; $i <= 12; $i++) {
            $dataPerbaikanBulanan[] = $perbaikanBulanan[$i] ?? 0;
        }

        // BAR CHART PELIHARA PER BULAN
        $peliharaBulanan = Pelihara::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();
        $dataPeliharaBulanan = [];

        for ($i = 1; $i <= 12; $i++) {
            $dataPeliharaBulanan[] = $peliharaBulanan[$i] ?? 0;
        }        
        return view('pages.admin.PPM.monitoring.index', compact(
            'totalAlat',
            'alatDiperbaiki',
            'alatNormal',
            'alatDipelihara',
            'alatBelumDipelihara',
            'dataPerbaikanBulanan',
            'dataPeliharaBulanan'
        ));
    }

    public function rekapInv()
    {
        return view('pages.admin.PPM.monitoring.rekap_inv');
    }

    public function rekapInvData()
    {
        $rs = Auth::user()->rs;
        $query = Inv::query()
        ->select(['id','id_alat','nama_alat',
                  'merek','type','seri','lokasi',
                  'jadwal','foto'
        ])->where('rs', $rs);
        return DataTables::eloquent($query)
        ->addColumn('aksi', function ($row) {

            $foto = '';

            if ($row->foto && file_exists(storage_path('app/public/'.$row->foto))) {

                $foto = '
                    <a href="'.asset('storage/'.$row->foto).'"
                        target="_blank"
                        class="btn btn-warning btn-xs"
                        title="Lihat Gambar">

                        <i class="fa fa-picture-o"></i>

                    </a>
                ';

            } else {

                $foto = '
                    <button
                        class="btn btn-warning btn-xs"
                        onclick="alert(\'Gambar tidak ada\')">

                        <i class="fa fa-picture-o"></i>

                    </button>
                ';

            }

            $hapus = '
                <button
                    class="btn btn-danger btn-xs btn-delete"
                    data-id="'.$row->id.'">

                    <i class="fa fa-trash-o"></i>

                </button>
            ';

            return $foto.' '.$hapus;

        })

        ->rawColumns(['aksi'])

        ->make(true);
    }

    public function deleteInv($id)
    {
        $item = Inv::findOrFail($id);

        // hapus file foto jika ada
        if ($item->foto && Storage::disk('public')->exists($item->foto)) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus'
        ]);
    }

    public function rekapPerbaikan()
    {
        $rs = Auth::user()->rs;
        $items = Perbaikan::where('rs', $rs)->get();
        return view('pages.admin.PPM.monitoring.rekap_perbaikan',compact('items'));
    }

    public function deletePerbaikan($id)
    {
        $item = Perbaikan::findOrFail($id);
        if(!empty($item->foto) && Storage::disk('public')->exists($item->foto)) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return back();
    }

    public function rekapPelihara()
    {
        $rs = Auth::user()->rs;
        $items = pelihara::where('rs', $rs)->get();
        return view('pages.admin.PPM.monitoring.rekap_pelihara',compact('items'));
    }

    public function deletePelihara($id)
    {
        $item = pelihara::findOrFail($id);
        if(!empty($item->foto) && Storage::disk('public')->exists($item->foto)) {
            Storage::disk('public')->delete($item->foto);
        }
        
        $item->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return back();
    }
    
}
