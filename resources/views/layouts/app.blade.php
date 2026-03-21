<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard') - TriBlocks Inventory System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    
    {{-- Additional Styles --}}
    @stack('styles')
    
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #cbd5e0;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* Smooth transitions */
        .sidebar-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Hide scrollbar when modal is open */
        body.modal-open {
            overflow: hidden;
        }
    </style>
</head>
<body class="font-['Inter'] antialiased bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">

    <!-- Mobile overlay -->
    <div class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm z-30 hidden" id="mobileOverlay"></div>

    <div class="min-h-screen flex flex-col">
        
        {{-- Top Navigation --}}
        <nav class="bg-white/80 backdrop-blur-md border-b border-gray-200/50 fixed top-0 w-full z-20">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    {{-- Left section --}}
                    <div class="flex items-center">
                        {{-- Mobile menu button --}}
                        <button type="button" class="lg:hidden mr-4 text-gray-500 hover:text-gray-600 focus:outline-none" id="mobileMenuBtn">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        
                        {{-- Logo --}}
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                                <span class="text-white font-bold text-lg">T</span>
                            </div>
                            <span class="font-semibold text-gray-800 text-lg hidden sm:block">TriBlocks Inventory</span>
                        </a>
                    </div>

                    {{-- Right section --}}
                    <div class="flex items-center space-x-4">
                        {{-- Search --}}
                        <div class="hidden md:block">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="search" placeholder="Search..." class="block w-64 pl-10 pr-3 py-2 border border-gray-200 rounded-xl bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-sm">
                            </div>
                        </div>

                        {{-- Notifications --}}
                        <button class="relative p-2 text-gray-500 hover:text-gray-600 hover:bg-gray-100 rounded-xl transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>

                        {{-- User menu --}}
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center space-x-3 p-2 hover:bg-gray-100 rounded-xl transition-colors duration-200">
                                <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                                </div>
                                <span class="hidden md:block text-sm font-medium text-gray-700">{{ Auth::user()->name ?? 'User' }}</span>
                                <svg class="hidden md:block w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            {{-- Dropdown menu --}}
                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 py-1 z-50">
                                <div class="flex items-center gap-4">
    <span>{{ auth()->user()->name }}</span>

    <a href="{{ route('profile.edit') }}" class="hover:underline">
        Profile
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="hover:underline">Logout</button>
    </form>
</div>
                                
                                <div class="border-t border-gray-100 my-1"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Main Layout --}}
        <div class="flex pt-16">
            
            {{-- Sidebar --}}
            <aside class="fixed lg:static inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 z-30 w-64 bg-white/80 backdrop-blur-md border-r border-gray-200/50 h-[calc(100vh-4rem)] overflow-y-auto sidebar-transition" id="sidebar">
                <div class="p-4">
                    {{-- Navigation menu --}}
                    @include('partials.sidebar')
                </div>
            </aside>

            {{-- Main Content --}}
            <main class="flex-1 min-h-[calc(100vh-4rem)] p-4 sm:p-6 lg:p-8 bg-gray-50/50">
                
                {{-- Stats Cards (example - can be yielded) --}}
                @hasSection('stats')
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        @yield('stats')
                    </div>
                @endif

                {{-- Dynamic Content --}}
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-sm border border-gray-200/50 p-6">
                    @yield('content')
                </div>
            </main>
        </div>

        {{-- Footer --}}
        <footer class="bg-white/80 backdrop-blur-md border-t border-gray-200/50 py-4 px-6">
            <div class="flex flex-col sm:flex-row justify-between items-center text-sm text-gray-600">
                <p>&copy; {{ date('Y') }} TriBlocks Inventory System. All rights reserved.</p>
                <div class="flex space-x-4 mt-2 sm:mt-0">
                    <a href="#" class="hover:text-blue-600 transition-colors">Help</a>
                    <a href="#" class="hover:text-blue-600 transition-colors">Privacy</a>
                    <a href="#" class="hover:text-blue-600 transition-colors">Terms</a>
                </div>
            </div>
        </footer>
    </div>

    {{-- Mobile menu script --}}
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

    {{-- Alpine.js for dropdowns (optional) --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    {{-- Additional Scripts --}}
    @stack('scripts')
</body>
</html>