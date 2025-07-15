<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index() 
    {
        $item = Invoice::all();
        return view('pages.marketing.invoice.index',
        compact('item'));
    }

    public function view($id)
    {
        $item = Invoice::findOrFail($id);
        return view('pages.marketing.invoice.view',
        compact('item'));
    }
}
