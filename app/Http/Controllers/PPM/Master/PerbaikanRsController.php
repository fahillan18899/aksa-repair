<?php

namespace App\Http\Controllers\PPM\Master;

use App\Models\Perbaikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Command\EditCommand;
use Yajra\DataTables\Facades\DataTables;

class PerbaikanRsController extends Controller
{
    public function perbaikanRs()
    {
        return view('pages.admin.PPM.master.perbaikan_rs');
    }

    public function perbaikanRsData()
    {
        $query = Perbaikan::query()->select([
            'id',
            'created_at',
            'rs',
            'nama_alat',
            'teknisi',
            'status',
            'korektif'
        ]);

        return DataTables::eloquent($query)
        ->editColumn('created_at', function($row){
            return $row->created_at ? $row->created_at->format('d-m-Y') : '-';
        })
        ->editColumn('rs', function($row){
            $url = route('master.detailRs', ['rs' => $row->rs]);
            return '<a href="' . $url . '" style="font-weight:bold;"> ' . e($row->rs) . ' </a>';
        })
        ->editColumn('nama_alat', function($row){
            return $row->nama_alat ?? '-';
        })
        ->editColumn('teknisi', function($row){
            return $row->teknisi ?? '-';
        })
        ->addColumn('status_button', function($row){
            if($row->status == '0'){
                $class = 'btn btn-warning btn-xs';
                $text = 'Perbaikan';
            } else {
                $class = 'btn btn-success btn-xs';
                $text = 'Selesai';
            }
            return
            '<button class= "'. $class .' btn-status" data-id="'.$row->id.'"
              data-status="'.$row->status.'" disabled>'.$text.'</button>';
        })
        ->editColumn('korektif', function($row){
            return $row->korektif ?? '-';
        })
        ->rawColumns(['rs', 'status_button'])->make(true);
    }
}
