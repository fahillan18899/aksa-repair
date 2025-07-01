<?php

namespace App\Http\Controllers\Akuntan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadFaktureController extends Controller
{
    public function index()
    {
        return view('pages.akuntan.upload_fakture.index');
    }
}
