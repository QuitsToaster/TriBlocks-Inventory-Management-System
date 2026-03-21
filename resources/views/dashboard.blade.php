@extends('layouts.app')

@section('page-title', 'Dashboard')
@section('page-description', 'Welcome back! Here\'s what\'s happening with your inventory today.')

@section('stats')
    <!-- Stats Cards Row -->
    <div class="col-span-1">
        <!-- Total Products -->
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-lg shadow-blue-500/20 p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm font-medium">Total Products</p>
                    <p class="text-3xl font-bold mt-2">{{ $totalProducts }}</p>
                </div>
                <div class="bg-blue-400/30 rounded-2xl p-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-purple-400/30">
                <a href="{{ route('products.index') }}" class="text-sm text-purple-100 hover:text-white flex items-center">
                    View products
                </a>
            </div>
        </div>
    </div>

    <div class="col-span-1">
        <!-- Total Sales -->
        <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-emerald-100 text-sm font-medium">Total Sales</p>
                    <p class="text-3xl font-bold mt-2">₱{{ number_format($totalSales, 2) }}</p>
                </div>
                <div class="bg-emerald-400/30 rounded-2xl p-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M12 8c-3 0-3 4 0 4s3 4 0 4m0-8v8"></path>
                    </svg>
                </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-purple-400/30">
                <a href="{{ route('sales.index') }}" class="text-sm text-purple-100 hover:text-white flex items-center">
                    View sales
                </a>
            </div>
        </div>
    </div>

    <div class="col-span-1">
        <!-- Low Stock -->
        <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-amber-100 text-sm font-medium">Low Stock Items</p>
                    <p class="text-3xl font-bold mt-2">{{ $lowStocks }}</p>
                </div>
                <div class="bg-amber-400/30 rounded-2xl p-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M12 9v2m0 4h.01"></path>
                    </svg>
                </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-purple-400/30">
                <a href="{{ route('stocks.index') }}" class="text-sm text-purple-100 hover:text-white flex items-center">
                    View stocks
                </a>
            </div>
        </div>
    </div>

    <!-- ✅ NEW SUPPLIER CARD -->
    <div class="col-span-1">
        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl shadow-lg shadow-purple-500/20 p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-100 text-sm font-medium">Total Suppliers</p>
                    <p class="text-3xl font-bold mt-2">{{ $totalSuppliers ?? 0 }}</p>
                </div>
                <div class="bg-purple-400/30 rounded-2xl p-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M7 20H2v-2a3 3 0 015.356-1.857"></path>
                    </svg>
                </div>
            </div>

            <div class="mt-4 pt-4 border-t border-purple-400/30">
                <a href="{{ route('suppliers.index') }}" class="text-sm text-purple-100 hover:text-white flex items-center">
                    View suppliers
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="space-y-8">
    <!-- Quick Actions - Clean Button Group -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
        <h3 class="text-base font-semibold text-gray-800 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="{{ route('products.create') }}" class="flex flex-col items-center gap-2 p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition-colors group">
                <div class="h-10 w-10 rounded-full bg-white shadow-sm flex items-center justify-center text-gray-600 group-hover:text-blue-600 group-hover:shadow transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700 group-hover:text-blue-700">Add Product</span>
            </a>
            <a href="{{ route('sales.index') }}" class="flex flex-col items-center gap-2 p-4 bg-gray-50 rounded-xl hover:bg-emerald-50 transition-colors group">
                <div class="h-10 w-10 rounded-full bg-white shadow-sm flex items-center justify-center text-gray-600 group-hover:text-emerald-600 group-hover:shadow transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700 group-hover:text-emerald-700">New Sale</span>
            </a>
            <a href="{{ route('suppliers.create') }}" class="flex flex-col items-center gap-2 p-4 bg-gray-50 rounded-xl hover:bg-purple-50 transition-colors group">
                <div class="h-10 w-10 rounded-full bg-white shadow-sm flex items-center justify-center text-gray-600 group-hover:text-purple-600 group-hover:shadow transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M7 20H2v-2a3 3 0 015.356-1.857"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700 group-hover:text-purple-700">Add Supplier</span>
            </a>
            <a href="#" class="flex flex-col items-center gap-2 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors group">
                <div class="h-10 w-10 rounded-full bg-white shadow-sm flex items-center justify-center text-gray-600 group-hover:text-gray-800 group-hover:shadow transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">Reports</span>
            </a>
        </div>
    </div>

    <!-- Main Content Grid - Charts and Lists -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Sales Chart Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-gray-800">Sales Overview</h3>
                <div class="flex items-center gap-2 text-xs text-gray-500">
                    <span class="inline-block w-2 h-2 rounded-full bg-blue-500"></span>
                    <span>Last 7 days</span>
                </div>
            </div>
            <div class="h-64">
                <canvas id="salesChart"></canvas>
            </div>
        </div>

        <!-- Low Stock Items List -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-gray-800">Low Stock Items</h3>
                <a href="{{ route('stocks.index') }}" class="text-xs text-blue-600 hover:text-blue-700 font-medium">View all</a>
            </div>
            <div class="space-y-3">
                @forelse($lowStockItems as $item)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                        <div class="flex items-center gap-3">
                            <div class="h-8 w-8 bg-amber-100 rounded-lg flex items-center justify-center text-amber-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">{{ $item->name }}</p>
                                <p class="text-xs text-gray-500">SKU: {{ $item->sku ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-red-600">{{ $item->stock }} left</p>
                            <p class="text-xs text-gray-400">Low stock</p>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-500 text-sm">All items are well stocked!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Stock Distribution Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-gray-800">Stock Distribution by Category</h3>
            </div>
            <div class="space-y-4">
                @forelse($stockDistribution as $stock)
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">{{ $stock->category }}</span>
                            <span class="font-medium text-gray-800">{{ $stock->percentage }}%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-full h-2 transition-all duration-500" style="width: {{ $stock->percentage }}%"></div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm text-center py-6">No stock data available</p>
                @endforelse
            </div>
        </div>

        <!-- Recent Sales Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-gray-800">Recent Sales</h3>
                <a href="{{ route('sales.index') }}" class="text-xs text-blue-600 hover:text-blue-700 font-medium">View all</a>
            </div>
            <div class="space-y-2">
                @forelse($recentSales as $sale)
                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="h-8 w-8 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">Sale #{{ $sale->id }}</p>
                                <p class="text-xs text-gray-500">{{ $sale->created_at->format('M d, Y h:i A') }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-gray-800">₱{{ number_format($sale->total_price, 2) }}</p>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-100 text-gray-400 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-500 text-sm">No recent sales</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('salesChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($salesLabels),
                datasets: [{
                    label: 'Sales (₱)',
                    data: @json($salesData),
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    borderColor: 'rgb(59, 130, 246)',
                    borderWidth: 1.5,
                    borderRadius: 8,
                    barPercentage: 0.65,
                    categoryPercentage: 0.8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return '₱ ' + context.raw.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f0f0f0'
                        },
                        ticks: {
                            callback: function(value) {
                                return '₱' + value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }
});
</script>
@endsection

@push('scripts')
<script>
    console.log('Modern dashboard loaded');
</script>
@endpush