<?php

namespace App\Http\Controllers\PPM\Master;

use App\Http\Controllers\Controller;
use App\Models\Inv;
use App\Models\Perbaikan;
use App\Models\pelihara;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Yajra\DataTables\Facades\DataTables;

class RumahSakitController extends Controller
{
    public function rumahSakit()
    {
        return view('pages.admin.PPM.master.rumah_sakit');
    }

    public function rumahSakitData()
    {
        //Ambil daftar rumah sakit dari inventaris
        $query = Inv::query()->select('rs')->selectRaw('COUNT(*) as total_alat')
        ->whereNotNull('rs')->where('rs', '!=', '')->groupBy('rs')->orderBy('rs');

        return DataTables::eloquent($query)
        ->addColumn('total_perbaikan', function($row){
            return Perbaikan::where('rs', $row->rs)->count();
        })
        ->addColumn('total_pemeliharaan', function($row){
            return pelihara::where('rs', $row->rs)->count();
        })
        ->addColumn('total_normal', function($row){
            $totalPerbaikan = Perbaikan::where('rs', $row->rs)->count();
            return max(0,$row->total_alat - $totalPerbaikan);
        })
        ->editColumn('rs', function($row){
            $url = route('master.detailRs', ['rs' => $row->rs]);
            return '<a href="' . $url . '" style="font-weight:bold;"> ' . e($row->rs) . ' </a>';
        })
        ->rawColumns(['rs'])->make(true);
    }
}
