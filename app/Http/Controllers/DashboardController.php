<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Example: Sales figures for today, yesterday, this month, and last month
        $todaySales = DB::table('sales')
            ->whereDate('created_at', now()->format('Y-m-d'))
            ->sum('total_price');

        $yesterdaySales = DB::table('sales')
            ->whereDate('created_at', now()->subDay()->format('Y-m-d'))
            ->sum('total_price');

        $thisMonthSales = DB::table('sales')
            ->whereMonth('created_at', now()->month)
            ->sum('total_price');

        $lastMonthSales = DB::table('sales')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->sum('total_price');

        return view('dashboard.index', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }
}

