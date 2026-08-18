<?php

namespace App\Http\Controllers\PPM\Master;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Inv;
use App\Models\Perbaikan;
use App\Models\pelihara;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class DetailRsController extends Controller
{
    public function detailInvData(Request $request)
    {
        $rs = $request->rs;
        $query = Inv::query()
        ->select(['id','id_alat','nama_alat','merek','type','seri','lokasi', 'jadwal','foto'])
        ->where('rs', $rs);
        return DataTables::eloquent($query)
        ->addColumn('aksi', function ($row) {
            $foto = '';
            if ($row->foto && file_exists(storage_path('app/public/'.$row->foto))) {
                $foto = 
                '<a href="'.asset('storage/'.$row->foto).'"target="_blank"
                    class="btn btn-warning btn-xs" title="Lihat Gambar">
                    <i class="fa fa-picture-o"></i>
                </a>';
            } else {
                $foto = 
                ' <button class="btn btn-warning btn-xs" onclick="alert(\'Gambar tidak ada\')">
                    <i class="fa fa-picture-o"></i>
                  </button>';
            }

            $hapus = 
            '<button class="btn btn-danger btn-xs btn-delete" data-id="'.$row->id.'">
                <i class="fa fa-trash-o"></i>
            </button> ';
            return $foto.' '.$hapus;
        })->rawColumns(['aksi']) ->make(true);
    }

    public function detaildeleteInv($id)
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

    public function detailPerbaikanData(Request $request)
    {
        $rs = $request->rs;
        $query = Perbaikan::query()
        ->select(['id','id_alat','created_at','nama_alat','merek','type','seri','lokasi','kepala',
        'teknisi','status','korektif','catatan','foto'])->where('rs', $rs);
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
            return '<button class="'.$class.' btn-status" data-id="'.$row->id.'"
                    data-status="'.$row->status.'"disabled>
                    '.$text.'
                    </button>';
        })
        ->addColumn('aksi', function ($row) {
            $foto = '';
            if ($row->foto && file_exists(storage_path('app/public/'.$row->foto))) {
                $foto = '
                    <a href="'.asset('storage/'.$row->foto).'" target="_blank"
                        class="btn btn-warning btn-xs" title="Lihat Gambar">
                        <i class="fa fa-picture-o"></i>
                    </a> ';
            } else {
                $foto = 
                    ' <button class="btn btn-warning btn-xs" onclick="alert(\'Gambar tidak ada\')">
                        <i class="fa fa-picture-o"></i>
                      </button>';
            }
            $hapus = 
                '<button class="btn btn-danger btn-xs btn-delete" data-id="'.$row->id.'">
                    <i class="fa fa-trash-o"></i>
                </button>';
            return $foto.' '.$hapus;
        })
        ->rawColumns([ 'aksi', 'status_button'])
        ->make(true);
    }

    public function detaildeletePerbaikan($id)
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

    public function detailPeliharaData(Request $request)
    {
        $rs = $request->rs;
        $query = pelihara::query()
        ->select(['id','created_at','nama_alat','merek','type','seri','lokasi'])->where('rs', $rs);
        return DataTables::eloquent($query)
        ->editColumn('created_at', function ($row){
            return Carbon::parse($row->created_at)
            ->timezone('Asia/Jakarta')->format('d-M-Y H:i');})
        ->addColumn('aksi', function ($row) {

            $view = 
            ' <a href="'.route('pelihara.show', $row->id).'" class="btn btn-primary btn-xs">
                <i class="fa fa-eye"></i>
              </a>';
            $hapus = 
            ' <button class="btn btn-danger btn-xs btn-delete" data-id="'.$row->id.'">
                    <i class="fa fa-trash-o"></i>
               </button>';
            return $view.' '.$hapus;
        })->rawColumns(['aksi'])->make(true);
    }

    public function detaildeletePelihara($id)
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
