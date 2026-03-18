<nav x-data="{ open: false }" class="bg-white/80 backdrop-blur-md border-b border-gray-200/50 sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                        <div class="w-9 h-9 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                            <span class="text-white font-bold text-xl">T</span>
                        </div>
                        <span class="font-semibold text-gray-800 text-lg hidden md:block">TriBlocks Inventory</span>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex md:items-center md:space-x-1 md:ml-8">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="px-4 py-2 text-sm font-medium rounded-xl transition-all duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>{{ __('Dashboard') }}</span>
                        </div>
                    </x-nav-link>

                    <!-- Products Dropdown -->
                    <div class="relative" x-data="{ productsOpen: false }">
                        <button @click="productsOpen = !productsOpen" class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100/80 rounded-xl transition-all duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            <span>Products</span>
                            <svg class="w-4 h-4" :class="{ 'rotate-180': productsOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="productsOpen" @click.away="productsOpen = false" class="absolute left-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50" x-transition>
                            <a href="{{ route('products.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">All Products</a>
                            <a href="{{ route('products.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Add Product</a>
                            <a href="{{ route('categories.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Categories</a>
                            <a href="{{ route('brands.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Brands</a>
                        </div>
                    </div>

                    <!-- Inventory Dropdown -->
                    <div class="relative" x-data="{ inventoryOpen: false }">
                        <button @click="inventoryOpen = !inventoryOpen" class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100/80 rounded-xl transition-all duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            <span>Inventory</span>
                            <svg class="w-4 h-4" :class="{ 'rotate-180': inventoryOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="inventoryOpen" @click.away="inventoryOpen = false" class="absolute left-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50" x-transition>
                            <a href="{{ route('stock.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Stock Levels</a>
                            <a href="{{ route('stock.adjustments') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Stock Adjustments</a>
                            <a href="{{ route('reports.low-stock') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Low Stock Report</a>
                            <a href="{{ route('reports.inventory') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Inventory Report</a>
                        </div>
                    </div>

                    <!-- Suppliers Link -->
                    <x-nav-link :href="route('suppliers.index')" :active="request()->routeIs('suppliers*')" class="px-4 py-2 text-sm font-medium rounded-xl transition-all duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>{{ __('Suppliers') }}</span>
                        </div>
                    </x-nav-link>

                    <!-- Sales Link -->
                    <x-nav-link :href="route('sales.index')" :active="request()->routeIs('sales*')" class="px-4 py-2 text-sm font-medium rounded-xl transition-all duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ __('Sales') }}</span>
                        </div>
                    </x-nav-link>
                </div>
            </div>

            <!-- Right Section -->
            <div class="flex items-center space-x-3">
                <!-- Quick Actions -->
                <div class="hidden md:flex items-center space-x-2">
                    <button class="p-2 text-gray-500 hover:text-gray-600 hover:bg-gray-100/80 rounded-xl transition-all duration-200 relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-green-500 rounded-full"></span>
                    </button>

                    <button class="p-2 text-gray-500 hover:text-gray-600 hover:bg-gray-100/80 rounded-xl transition-all duration-200 relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                </div>

                <!-- Settings Dropdown -->
                <div class="relative" x-data="{ settingsOpen: false }">
                    <button @click="settingsOpen = !settingsOpen" class="flex items-center space-x-3 p-2 hover:bg-gray-100/80 rounded-xl transition-all duration-200">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold text-sm shadow-md">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div class="hidden md:block text-left">
                            <div class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</div>
                            <div class="text-xs text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                        <svg class="hidden md:block w-4 h-4 text-gray-500" :class="{ 'rotate-180': settingsOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="settingsOpen" @click.away="settingsOpen = false" class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50" x-transition>
                        <div class="px-4 py-3 border-b border-gray-100">
                            <p class="text-xs text-gray-500">Signed in as</p>
                            <p class="text-sm font-medium text-gray-800 truncate">{{ Auth::user()->email }}</p>
                        </div>
                        
                        <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                            <svg class="w-4 h-4 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            {{ __('Profile') }}
                        </a>

                        <a href="{{ route('settings') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                            <svg class="w-4 h-4 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            {{ __('Settings') }}
                        </a>

                        <div class="border-t border-gray-100 my-1"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                <svg class="w-4 h-4 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Hamburger (Mobile) -->
                <div class="flex items-center sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-xl text-gray-500 hover:text-gray-600 hover:bg-gray-100/80 focus:outline-none transition-all duration-200">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div x-show="open" @click.away="open = false" class="sm:hidden fixed inset-0 z-40" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <!-- Overlay -->
        <div class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm"></div>
        
        <!-- Menu Content -->
        <div class="fixed right-0 top-0 bottom-0 w-64 bg-white/95 backdrop-blur-md shadow-xl overflow-y-auto" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
            <div class="p-4">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">T</span>
                        </div>
                        <span class="font-semibold text-gray-800">Menu</span>
                    </div>
                    <button @click="open = false" class="p-2 text-gray-500 hover:text-gray-600 hover:bg-gray-100 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-xl">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>{{ __('Dashboard') }}</span>
                        </div>
                    </x-responsive-nav-link>

                    <!-- Mobile Products Section -->
                    <div x-data="{ productsOpen: false }">
                        <button @click="productsOpen = !productsOpen" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-xl">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                <span>Products</span>
                            </div>
                            <svg class="w-4 h-4" :class="{ 'rotate-180': productsOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="productsOpen" class="pl-11 space-y-1">
                            <a href="{{ route('products.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-xl">All Products</a>
                            <a href="{{ route('products.create') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-xl">Add Product</a>
                            <a href="{{ route('categories.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-xl">Categories</a>
                        </div>
                    </div>

                    <!-- More mobile navigation items... -->
                    
                    <x-responsive-nav-link :href="route('profile.edit')" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-xl">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>{{ __('Profile') }}</span>
                        </div>
                    </x-responsive-nav-link>

                    <form method="POST" action="{{ route('logout') }}" class="block">
                        @csrf
                        <button type="submit" class="w-full flex items-center space-x-3 px-4 py-3 text-red-600 hover:bg-red-50 rounded-xl">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            <span>{{ __('Log Out') }}</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>