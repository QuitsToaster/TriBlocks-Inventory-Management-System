<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    return view('dashboard', [
        'totalProducts' => Product::count(),
        'totalSales' => Sale::sum('total_price'),
        'lowStocks' => Product::where('stock', '<=', 10)->count(),
    ]);
}
}
