<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    // ✅ Dashboard (ONLY ONE)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ✅ Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ Inventory Modules
    Route::resource('products', ProductController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('stocks', StockController::class);
    Route::resource('sales', SaleController::class);

});

// In routes/web.php or routes/api.php
Route::get('/api/products/count', function() {
    return response()->json(['count' => App\Models\Product::count()]);
})->name('api.products.count');

Route::get('/api/stocks/low-count', function() {
    $lowStockThreshold = 10; // Adjust as needed
    return response()->json(['count' => App\Models\Product::where('quantity', '<=', $lowStockThreshold)->count()]);
})->name('api.stocks.low-count');

Route::get('/api/suppliers/count', function() {
    return response()->json(['count' => App\Models\Supplier::count()]);
})->name('api.suppliers.count');

Route::get('/api/sales/total', [SaleController::class, 'total'])->name('api.sales.total');

require __DIR__.'/auth.php';