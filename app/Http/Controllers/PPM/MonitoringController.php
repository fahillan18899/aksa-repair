<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
        return view('pages.admin.PPM.monitoring.rekap_perbaikan');
    }

    public function rekapPerbaikanData()
    {
        $rs = Auth::user()->rs;
        $query = Perbaikan::query()
        ->select(['id','id_alat','created_at','nama_alat',
                  'merek','type','seri','lokasi',
                  'kepala','teknisi','status',
                  'korektif','catatan','foto'
        ])->where('rs', $rs);
        return DataTables::eloquent($query)
        ->editColumn('created_at', function ($row){
            return Carbon::parse($row->created_at)
            ->timezone('Asia/Jakarta')->format('d-M-Y H:i');})
        ->addColumn('status_button', function ($row) {

            if ($row->status == '0') {
                $class = 'btn btn-warning btn-xs';
                $text = 'Perbaikan';
            } else {
                $class = 'btn btn-success btn-xs';
                $text = 'Selesai';
            }

            return '
                <button
                    class="'.$class.' btn-status"
                    data-id="'.$row->id.'"
                    data-status="'.$row->status.'"
                    disabled>

                    '.$text.'

                </button>
            ';
        })
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

        ->rawColumns([
                'aksi',
                'status_button'
                ])

        ->make(true);
    }

    public function deletePerbaikan($id)
    {
        $item = Perbaikan::findOrFail($id);

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

    public function rekapPelihara()
    {
        return view('pages.admin.PPM.monitoring.rekap_pelihara');
    }

    public function rekapPeliharaData()
    {
        $rs = Auth::user()->rs;
        $query = pelihara::query()
        ->select(['id','created_at','nama_alat','merek','type','seri','lokasi'
        ])->where('rs', $rs);
        return DataTables::eloquent($query)
        ->editColumn('created_at', function ($row){
            return Carbon::parse($row->created_at)
            ->timezone('Asia/Jakarta')->format('d-M-Y H:i');})
        ->addColumn('aksi', function ($row) {

            $view = '
            <a href="'.route('pelihara.show', $row->id).'"
            class="btn btn-primary btn-xs">
            <i class="fa fa-eye"></i>
            </a>
            ';

            $hapus = '
                <button
                    class="btn btn-danger btn-xs btn-delete"
                    data-id="'.$row->id.'">

                    <i class="fa fa-trash-o"></i>

                </button>
            ';

            return $view.' '.$hapus;

        })

        ->rawColumns(['aksi'])

        ->make(true);
    }

    public function deletePelihara($id)
    {
        $item = pelihara::findOrFail($id);

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
    
}
