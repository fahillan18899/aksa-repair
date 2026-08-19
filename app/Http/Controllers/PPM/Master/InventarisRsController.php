<?php

namespace App\Http\Controllers\PPM\Master;

use App\Models\Inv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

use function PHPUnit\Framework\returnArgument;
use function Termwind\renderUsing;

class InventarisRsController extends Controller
{
    public function invRs()
    {
        return view('pages.admin.PPM.master.inv_rs');
    }

    public function invRsData()
    {
        $query = Inv::query()->select([
            'id',
            'id_alat',
            'nama_alat',
            'merek',
            'seri',
            'lokasi',
            'rs'
        ]);

        return DataTables::eloquent($query)
        ->addIndexColumn()
        ->editColumn('id_alat', function($row){
            return $row->id_alat ?? '-';
        })
        ->editColumn('nama_alat', function($row){
            return $row->nama_alat ?? '-';
        })
        ->editColumn('merek', function($row){
            return $row->merek ?? '-';
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
}
