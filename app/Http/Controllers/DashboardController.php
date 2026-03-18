<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;

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