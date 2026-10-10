<?php

namespace App\Http\Controllers\PPM;

use Carbon\Carbon;
use App\Models\pelihara;
use App\Models\Perbaikan;
use App\Exports\RekapBulanExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RekapBulanController extends Controller
{
public function rekapBulan()
    {
        $rs = Auth::user()->rs;

        // Ambil bulan yang memiliki data perbaikan
        $dataPerbaikan = Perbaikan::where('rs', $rs)
            ->whereNotNull('created_at')
            ->selectRaw(
                'YEAR(created_at) as tahun, MONTH(created_at) as bulan'
            )
            ->distinct()
            ->get();

        // Ambil bulan yang memiliki data pemeliharaan
        $dataPelihara = pelihara::where('rs', $rs)
            ->whereNotNull('created_at')
            ->selectRaw(
                'YEAR(created_at) as tahun, MONTH(created_at) as bulan'
            )
            ->distinct()
            ->get();

        // Gabungkan kedua sumber data dan hilangkan bulan duplikat
        $daftarBulan = $dataPerbaikan
            ->concat($dataPelihara)
            ->map(function ($item) {
                $tahun = (int) $item->tahun;
                $bulan = (int) $item->bulan;

                return [
                    'tahun' => $tahun,
                    'bulan' => $bulan,
                    'nama_bulan' => Carbon::createFromDate(
                        $tahun,
                        $bulan,
                        1
                    )->translatedFormat('F Y'),
                ];
            })
            ->unique(function ($item) {
                return $item['tahun'] . '-' . $item['bulan'];
            })
            ->sortByDesc(function ($item) {
                return $item['tahun'] * 100 + $item['bulan'];
            })
            ->values();

        return view('pages.admin.PPM.monitoring.rekap_bulan',
            compact('daftarBulan')
        );
    }


    public function downloadRekapBulan($tahun, $bulan)
    {
        $rs = Auth::user()->rs;

        abort_unless(
            is_numeric($tahun) &&
            (int) $tahun >= 2000 &&
            (int) $tahun <= 2100 &&
            is_numeric($bulan) &&
            (int) $bulan >= 1 &&
            (int) $bulan <= 12,
            404
        );

        $namaFile = 'rekap-laporan-' . $tahun . '-'
            . str_pad($bulan, 2, '0', STR_PAD_LEFT) . '.xlsx';

        return Excel::download(
            new RekapBulanExport(
                $rs,
                (int) $tahun,
                (int) $bulan
            ),
            $namaFile
        );
    }


}
