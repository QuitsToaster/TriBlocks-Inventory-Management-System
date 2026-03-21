<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        // Sales chart
        $salesData = Sale::selectRaw('DATE(created_at) as date, SUM(total_price) as total')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->take(7)
            ->get();

        $labels = $salesData->pluck('date');
        $data = $salesData->pluck('total');

        // Stock distribution calculation
        $totalStock = Product::sum('stock');
        $stockDistribution = Product::selectRaw('category, SUM(stock) as total')
            ->groupBy('category')
            ->get()
            ->map(function($item) use ($totalStock) {
                $item->percentage = $totalStock > 0 ? round(($item->total / $totalStock) * 100) : 0;
                return $item;
            });

        return view('dashboard', [
            'totalProducts' => Product::count(),
            'totalSales' => Sale::sum('total_price'),
            'lowStocks' => Product::where('stock', '<=', 10)->count(),
            'totalSuppliers' => Supplier::count(),

            'salesLabels' => $labels,
            'salesData' => $data,

            'recentSales' => Sale::latest()->take(5)->get(),
            'lowStockItems' => Product::where('stock', '<=', 10)->take(5)->get(),

            // ✅ Pass stock distribution
            'stockDistribution' => $stockDistribution,
        ]);
    }
}