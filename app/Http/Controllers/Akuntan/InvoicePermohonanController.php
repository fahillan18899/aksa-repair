<?php

namespace App\Http\Controllers\Akuntan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicePermohonanController extends Controller
{
    public function index()
    {
        return view('pages.akuntan.invoice_permohonan.index');
    }
}
