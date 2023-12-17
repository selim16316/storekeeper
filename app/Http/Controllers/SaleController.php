<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function index()
    {
        $sales = DB::table('sales')->get();

        return view('sales.index', compact('sales'));
    }

    public function store(Request $request)
    {
        // Sale store logic...

        return redirect()->route('sales.index');
    }
}
