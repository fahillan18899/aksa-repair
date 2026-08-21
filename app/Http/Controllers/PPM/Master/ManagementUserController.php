<?php

namespace App\Http\Controllers\PPM\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function managUser()
    {
        return view('pages.admin.PPM.master.manag_user');
    }

    public function managUserData()
    {
        $query = User::query()->select([
            'user_id',
            'username',
            'rs',
            'user_role'
        ]);

        return DataTables::eloquent($query)
        ->addIndexColumn()
        ->editColumn('user_id', function($row){
            return $row->user_id ?? '-';
        })
        ->editColumn('username', function($row){
            return $row->username ?? '-';
        })
        ->editColumn('rs', function($row){
            return $row->rs ?? '-';
        })
        ->editColumn('user_role', function($row){
            return $row->user_role ?? '-';
        })
        ->rawColumns(['rs'])->make(true);
    }

}
