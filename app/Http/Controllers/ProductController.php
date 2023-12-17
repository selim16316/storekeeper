<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('products.index');
    }
}
