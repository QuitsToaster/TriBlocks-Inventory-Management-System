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
<div class="space-y-6">

    <!-- Quick Actions -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-100 p-5">
        <h3 class="font-semibold text-gray-800 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            <a href="{{ route('products.create') }}" class="flex flex-col items-center p-4 bg-white rounded-xl hover:shadow-md">
                <span class="text-xs text-gray-600">Add Product</span>
            </a>
            <a href="{{ route('sales.create') }}" class="flex flex-col items-center p-4 bg-white rounded-xl hover:shadow-md">
                <span class="text-xs text-gray-600">New Sale</span>
            </a>
            <a href="{{ route('suppliers.create') }}" class="flex flex-col items-center p-4 bg-white rounded-xl hover:shadow-md">
                <span class="text-xs text-gray-600">Add Supplier</span>
            </a>
        </div>
    </div>


    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Sales Chart -->
        <div class="bg-white p-5 rounded-xl shadow">
            <h3 class="font-semibold mb-4">Sales Overview</h3>
            <canvas id="salesChart"></canvas>
        </div>

        <!-- Low Stock List -->
        <div class="bg-white p-5 rounded-xl shadow">
            <h3 class="font-semibold mb-4">Low Stock Items</h3>

            @forelse($lowStockItems as $item)
                <div class="flex justify-between border-b py-2">
                    <span>{{ $item->name }}</span>
                    <span class="text-red-600">{{ $item->stock }}</span>
                </div>
            @empty
                <p class="text-gray-500 text-sm">No low stock items</p>
            @endforelse
        </div>

        <!-- Stock Distribution -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
    <div class="flex items-center justify-between mb-4">
        <h3 class="font-semibold text-gray-800">Stock Distribution</h3>
    </div>
    <div class="space-y-4">
        @forelse($stockDistribution as $stock)
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600">{{ $stock->category }}</span>
                    <span class="font-medium text-gray-800">{{ $stock->percentage }}%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-600 rounded-full h-2" style="width: {{ $stock->percentage }}%"></div>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-sm">No stock data available</p>
        @endforelse
    </div>
</div>

    </div>

    <!-- Recent Sales -->
    <div class="bg-white p-5 rounded-xl shadow">
        <h3 class="font-semibold mb-4">Recent Sales</h3>

        @forelse($recentSales as $sale)
            <div class="flex justify-between border-b py-2">
                <span>Sale #{{ $sale->id }}</span>
                <span>₱{{ number_format($sale->total_price, 2) }}</span>
            </div>
        @empty
            <p class="text-gray-500 text-sm">No recent sales</p>
        @endforelse

    </div>

</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('salesChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: @json($salesLabels),
        datasets: [{
            label: 'Sales',
            data: @json($salesData),
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: true }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

@endsection
@push('scripts')
<script>
    // You can add chart libraries like Chart.js or ApexCharts here
    console.log('Dashboard loaded');
</script>
@endpush