<aside class="fixed lg:static inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 z-30 w-64 bg-white/80 backdrop-blur-md border-r border-gray-200/50 h-[calc(100vh-4rem)] overflow-y-auto sidebar-transition" id="sidebar">
    
    <!-- Quick Action Button -->
    <div class="p-4 border-b border-gray-200/50">
        <a href="{{ route('products.create') }}" class="flex items-center justify-center w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2.5 rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-200 transform hover:scale-[1.02] font-medium text-sm group">
            <svg class="w-5 h-5 mr-2 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Add New Product
        </a>
    </div>

    <!-- Main Navigation -->
    <nav class="p-4">
        <div class="mb-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 px-3">Main Menu</h3>
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-3 py-2.5 text-gray-700 hover:text-gray-900 hover:bg-gray-100/80 rounded-xl transition-all duration-200 group {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-600' : '' }}">
                        <div class="flex items-center justify-center w-5">
                            <svg class="w-5 h-5" :class="{'text-blue-600': request()->routeIs('dashboard')}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <span class="flex-1 text-sm font-medium">Dashboard</span>
                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full {{ request()->routeIs('dashboard') ? 'opacity-100' : 'opacity-0' }}"></span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Inventory Management Section -->
        <div class="mb-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 px-3">Inventory</h3>
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('products.index') }}" class="flex items-center space-x-3 px-3 py-2.5 text-gray-700 hover:text-gray-900 hover:bg-gray-100/80 rounded-xl transition-all duration-200 group {{ request()->routeIs('products.*') ? 'bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-600' : '' }}">
                        <div class="flex items-center justify-center w-5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <span class="flex-1 text-sm font-medium">All Products</span>
                        <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">234</span>
                    </a>
                </li>
                <li>
                </li>
                <li>
                </li>
            </ul>
        </div>

        <!-- Stock Management Section -->
        <div class="mb-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 px-3">Stock Control</h3>
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('stocks.index') }}" class="flex items-center space-x-3 px-3 py-2.5 text-gray-700 hover:text-gray-900 hover:bg-gray-100/80 rounded-xl transition-all duration-200 group {{ request()->routeIs('stocks.*') ? 'bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-600' : '' }}">
                        <div class="flex items-center justify-center w-5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <span class="flex-1 text-sm font-medium">Current Stock</span>
                        <span class="text-xs text-amber-600 bg-amber-50 px-2 py-0.5 rounded-full">Low: 3</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Business Partners Section -->
        <div class="mb-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 px-3">Partners</h3>
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('suppliers.index') }}" class="flex items-center space-x-3 px-3 py-2.5 text-gray-700 hover:text-gray-900 hover:bg-gray-100/80 rounded-xl transition-all duration-200 group {{ request()->routeIs('suppliers.*') ? 'bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-600' : '' }}">
                        <div class="flex items-center justify-center w-5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <span class="flex-1 text-sm font-medium">Suppliers</span>
                        <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">24</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Transactions Section -->
        <div class="mb-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 px-3">Transactions</h3>
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('sales.index') }}" class="flex items-center space-x-3 px-3 py-2.5 text-gray-700 hover:text-gray-900 hover:bg-gray-100/80 rounded-xl transition-all duration-200 group {{ request()->routeIs('sales.*') ? 'bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-600' : '' }}">
                        <div class="flex items-center justify-center w-5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="flex-1 text-sm font-medium">Sales</span>
                        <span class="text-xs text-green-600 bg-green-50 px-2 py-0.5 rounded-full">+$2.4k</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Reports Section -->
        <div class="mb-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 px-3">Reports</h3>
            <ul class="space-y-1">
            </ul>
        </div>

        <!-- Settings Section at bottom -->
        <div class="mt-auto pt-4 border-t border-gray-200/50">
            <ul class="space-y-1">
            </ul>
        </div>
    </nav>

    <!-- User Info (visible on mobile/tablet) -->
    <div class="lg:hidden p-4 border-t border-gray-200/50 mt-4">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold">
                {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
            </div>
            <div>
                <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name ?? 'User' }}</p>
                <p class="text-xs text-gray-500">{{ Auth::user()->email ?? 'user@example.com' }}</p>
            </div>
        </div>
    </div>
</aside>

<!-- Mobile overlay script (if not already included) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('mobileOverlay');
        
        if (mobileMenuBtn && sidebar && overlay) {
            mobileMenuBtn.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
                document.body.classList.toggle('modal-open');
            });
            
            overlay.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('modal-open');
            });
        }
    });
</script>