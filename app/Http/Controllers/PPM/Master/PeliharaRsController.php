<?php

namespace App\Http\Controllers\PPM\Master;

use App\Models\pelihara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RekapPeliharaRsExport;
use Psy\Command\EditCommand;
use Yajra\DataTables\Facades\DataTables;

class PeliharaRsController extends Controller
{
    public function peliharaRs()
    {
        return view('pages.admin.PPM.master.pelihara_rs');
    }

    public function peliharaRsData()
    {
        $query = pelihara::query()->select([
            'id',
            'created_at',
            'nama_alat',
            'merek',
            'type',
            'seri',
            'lokasi',
            'rs'
        ]);

        return DataTables::eloquent($query)
        ->addIndexColumn()
        ->editColumn('created_at', function($row){
            return $row->created_at ? $row->created_at->format('d-m-Y') : '-';
        })
        ->editColumn('nama_alat', function($row){
            return $row->nama_alat ?? '-';
        })
        ->editColumn('merek', function($row){
            return $row->merek ?? '-';
        })
        ->editColumn('type', function($row){
            return $row->type ?? '-';
        })
        ->editColumn('seri', function($row){
            return $row->seri ?? '-';
        })
        ->editColumn('lokasi', function($row){
            return $row->lokasi ?? '-';
        })
        ->editColumn('rs', function($row){
            $url = route('master.detailRs', ['rs' => $row->rs]);
            return '<a href="' . $url . '" style="font-weight:bold;"> ' . e($row->rs) . ' </a>';
        })
        ->rawColumns(['rs'])->make(true);
    }

        public function ExPortPelihara()
    {
        return Excel::download(
            new RekapPeliharaRsExport,
            'RekapPeliharaRs.xlsx'
        );
    }
}
