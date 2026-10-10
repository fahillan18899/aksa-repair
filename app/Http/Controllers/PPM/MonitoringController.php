<?php

namespace App\Http\Controllers\PPM;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Inv;
use App\Models\Perbaikan;
use App\Models\pelihara;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RekapInvExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MonitoringController extends Controller
{

    public function dashboardPpm()
    {
        $rs = Auth::user()->rs;

        // Tanggal bulan berjalan
        $sekarang = now();
        $awalBulan = $sekarang->copy()->startOfMonth();
        $akhirBulan = $sekarang->copy()->endOfMonth();
        $namaBulan = $sekarang->translatedFormat('F Y');

        // TOTAL INVENTARIS
        $totalAlat = Inv::where('rs', $rs)->count();

        // // VERSI 1: PERBAIKAN YANG MASIH BERLANGSUNG
        // // Tetap dihitung meskipun bulan sudah berganti
        // $alatDiperbaiki = Perbaikan::where('rs', $rs)
        //     ->where('status', '0')
        //     ->count();

        
        // VERSI 2: PERBAIKAN BULAN BERJALAN SAJA
        // Perbaikan bulan sebelumnya tidak ikut dihitung,
        // meskipun statusnya masih belum selesai
        $alatDiperbaiki = Perbaikan::where('rs', $rs)
            ->where('status', '0')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        

        // TOTAL ALAT NORMAL
        $alatNormal = max(0, $totalAlat - $alatDiperbaiki);

        // PEMELIHARAAN BULAN INI
        $alatDipelihara = Pelihara::where('rs', $rs)
            ->whereBetween('created_at', [$awalBulan, $akhirBulan])
            ->count();

        $alatBelumDipelihara = max(0, $totalAlat - $alatDipelihara);

        // DATA GRAFIK PERBAIKAN: BULAN INI SAJA
        $dataPerbaikanBulanan = [$alatDiperbaiki];

        // DATA GRAFIK PEMELIHARAAN: BULAN INI SAJA
        $dataPeliharaBulanan = [$alatDipelihara];

        return view('pages.admin.PPM.monitoring.index', compact(
            'totalAlat',
            'alatDiperbaiki',
            'alatNormal',
            'alatDipelihara',
            'alatBelumDipelihara',
            'dataPerbaikanBulanan',
            'dataPeliharaBulanan',
            'namaBulan'
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

    public function exportExcel()
    {
        return Excel::download(
            new RekapInvExport,
            'RekapInventaris.xlsx'
        );
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
