<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DataInvoiceController extends Controller
{
    public function index()
    {
        $marketing = Auth::user()->username;
        $item = Invoice::where('marketing', $marketing)->get();
        return view('pages.marketing.data_invoice.index',
        compact('item'));
    }
}
