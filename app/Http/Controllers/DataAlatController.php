<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class DataAlatController extends Controller
{
    public function index($id)
    {
        $data = DataBarang::where('no_urut', $id)->first();
            return view('pages.data_alat',compact('data'));
        }
    }