@extends('layouts.app')

@section('page-title', 'Dashboard')
@section('page-description', 'Welcome back! Here\'s what\'s happening with your inventory today.')

@section('stats')
    <!-- Stats Cards Row -->
    <div class="col-span-1">
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-lg shadow-blue-500/20 p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm font-medium">Total Products</p>
                    <p class="text-3xl font-bold mt-2">{{ $totalProducts }}</p>
                    <p class="text-blue-100 text-xs mt-1 flex items-center">
                        <span class="bg-blue-400/30 rounded-full px-2 py-0.5">+12 this month</span>
                    </p>
                </div>
                <div class="bg-blue-400/30 rounded-2xl p-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-blue-400/30">
                <a href="{{ route('products.index') }}" class="text-sm text-blue-100 hover:text-white flex items-center">
                    View all products
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="col-span-1">
        <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl shadow-lg shadow-emerald-500/20 p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-emerald-100 text-sm font-medium">Total Sales</p>
                    <p class="text-3xl font-bold mt-2">₱{{ number_format($totalSales, 2) }}</p>
                    <p class="text-emerald-100 text-xs mt-1 flex items-center">
                        <span class="bg-emerald-400/30 rounded-full px-2 py-0.5 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            +8.2% vs last month
                        </span>
                    </p>
                </div>
                <div class="bg-emerald-400/30 rounded-2xl p-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-emerald-400/30">
                <a href="{{ route('sales.index') }}" class="text-sm text-emerald-100 hover:text-white flex items-center">
                    View sales report
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="col-span-1">
        <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl shadow-lg shadow-amber-500/20 p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-amber-100 text-sm font-medium">Low Stock Items</p>
                    <p class="text-3xl font-bold mt-2">{{ $lowStocks }}</p>
                    <p class="text-amber-100 text-xs mt-1 flex items-center">
                        <span class="bg-amber-400/30 rounded-full px-2 py-0.5">Need reordering</span>
                    </p>
                </div>
                <div class="bg-amber-400/30 rounded-2xl p-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-amber-400/30">
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="space-y-6">
    <!-- Additional Stats Row (Optional) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Total Suppliers -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Suppliers</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">{{ $totalSuppliers ?? 24 }}</p>
                </div>
                <div class="bg-purple-100 rounded-lg p-3">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-3 text-xs text-gray-500">
                <span class="text-green-600">+2</span> new this month
            </div>
        </div>

        <!-- Total Categories -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Categories</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">{{ $totalCategories ?? 12 }}</p>
                </div>
                <div class="bg-indigo-100 rounded-lg p-3">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-3 text-xs text-gray-500">
                <span class="text-green-600">+3</span> new categories
            </div>
        </div>

        <!-- Monthly Revenue -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Monthly Revenue</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">₱{{ number_format($monthlyRevenue ?? 45678, 2) }}</p>
                </div>
                <div class="bg-green-100 rounded-lg p-3">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-3 text-xs text-gray-500">
                <span class="text-green-600">↑ 12.5%</span> from last month
            </div>
        </div>

        <!-- Total Customers -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Customers</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">{{ $totalCustomers ?? 156 }}</p>
                </div>
                <div class="bg-pink-100 rounded-lg p-3">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-3 text-xs text-gray-500">
                <span class="text-green-600">+8</span> new customers
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Sales Chart -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-gray-800">Sales Overview</h3>
                <select class="text-sm border border-gray-200 rounded-lg px-3 py-1.5 bg-gray-50">
                    <option>This Week</option>
                    <option>This Month</option>
                    <option>This Year</option>
                </select>
            </div>
            <div class="h-64 flex items-end space-x-2">
                <!-- Simple bar chart representation -->
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 60%"></div>
                    <span class="text-xs text-gray-500 mt-2">Mon</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 45%"></div>
                    <span class="text-xs text-gray-500 mt-2">Tue</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 80%"></div>
                    <span class="text-xs text-gray-500 mt-2">Wed</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 70%"></div>
                    <span class="text-xs text-gray-500 mt-2">Thu</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 90%"></div>
                    <span class="text-xs text-gray-500 mt-2">Fri</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 50%"></div>
                    <span class="text-xs text-gray-500 mt-2">Sat</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 30%"></div>
                    <span class="text-xs text-gray-500 mt-2">Sun</span>
                </div>
            </div>
        </div>

        <!-- Stock Distribution -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-gray-800">Stock Distribution</h3>
            </div>
            <div class="space-y-4">
                                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Electronics</span>
                        <span class="font-medium text-gray-800">45%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 rounded-full h-2" style="width: 45%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Clothing</span>
                        <span class="font-medium text-gray-800">30%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 rounded-full h-2" style="width: 30%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Food & Beverages</span>
                        <span class="font-medium text-gray-800">15%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-600 rounded-full h-2" style="width: 15%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Others</span>
                        <span class="font-medium text-gray-800">10%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-600 rounded-full h-2" style="width: 10%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities & Low Stock Alerts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Sales -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-gray-800">Recent Sales</h3>
                <a href="{{ route('sales.index') }}" class="text-sm text-blue-600 hover:text-blue-700">View All</a>
            </div>
            <div class="space-y-3">
                @forelse($recentSales ?? [] as $sale)
                <div class="flex items-center justify-between py-2 border-b border-gray-100 last:border-0">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Product #{{ $sale->product_id ?? '123' }}</p>
                            <p class="text-xs text-gray-500">{{ $sale->created_at ?? '2 minutes ago' }}</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-gray-800">₱{{ number_format($sale->amount ?? 1500, 2) }}</span>
                </div>
                @empty
                <div class="text-center py-8">
                    <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <p class="text-gray-500 text-sm">No recent sales</p>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Low Stock Alerts -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-gray-800">Low Stock Alerts</h3>
            </div>
            <div class="space-y-3">
                @forelse($lowStockItems ?? [] as $item)
                <div class="flex items-center justify-between py-2 border-b border-gray-100 last:border-0">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">{{ $item->name ?? 'Product Name' }}</p>
                            <p class="text-xs text-gray-500">SKU: {{ $item->sku ?? 'PRD001' }}</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-amber-600">{{ $item->stock ?? 0 }} left</span>
                </div>
                @empty
                <!-- Sample data if none provided -->
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Wireless Headphones</p>
                            <p class="text-xs text-gray-500">SKU: WH-001</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-amber-600">3 left</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Gaming Mouse</p>
                            <p class="text-xs text-gray-500">SKU: GM-002</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-amber-600">2 left</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">USB-C Cable</p>
                            <p class="text-xs text-gray-500">SKU: UC-003</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-amber-600">5 left</span>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-100 p-5">
        <h3 class="font-semibold text-gray-800 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            <a href="{{ route('products.create') }}" class="flex flex-col items-center p-4 bg-white rounded-xl hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <span class="text-xs text-gray-600">Add Product</span>
            </a>
            <a href="{{ route('sales.create') }}" class="flex flex-col items-center p-4 bg-white rounded-xl hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <span class="text-xs text-gray-600">New Sale</span>
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // You can add chart libraries like Chart.js or ApexCharts here
    console.log('Dashboard loaded');
</script>
@endpush