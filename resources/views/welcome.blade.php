<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TriBlocks Inventory System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Efficient inventory management solution for your business">

    @vite('resources/css/app.css')
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body class="font-['Inter'] antialiased bg-gradient-to-br from-blue-50 via-white to-indigo-50">

    <!-- Animated background elements -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute top-40 left-40 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/70 backdrop-blur-md border-b border-gray-200/50 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">T</span>
                    </div>
                    <span class="font-semibold text-gray-800">TriBlocks</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-5 py-2 rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-200 transform hover:scale-105 font-medium">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Text Content -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center bg-white/70 backdrop-blur-sm rounded-full px-4 py-2 border border-gray-200/50 mb-8">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-sm text-gray-600">Real-time Inventory Tracking</span>
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Streamline Your
                        <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Inventory</span>
                        Management
                    </h1>
                    
                    <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0">
                        Take control of your stock, track suppliers, manage sales, and optimize your business operations with our comprehensive inventory system.
                    </p>
                    
                    <!-- CTA Buttons for mobile/tablet -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-8 py-4 rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-200 transform hover:scale-105 font-semibold text-lg inline-flex items-center justify-center group">
                            Get Started
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#features" class="bg-white/80 backdrop-blur-sm text-gray-700 px-8 py-4 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-200 font-semibold text-lg inline-flex items-center justify-center border border-gray-200">
                            Learn More
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 mt-12">
                        <div class="text-center lg:text-left">
                            <div class="text-3xl font-bold text-gray-900">10K+</div>
                            <div class="text-sm text-gray-600">Products Tracked</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-3xl font-bold text-gray-900">500+</div>
                            <div class="text-sm text-gray-600">Happy Clients</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-3xl font-bold text-gray-900">99.9%</div>
                            <div class="text-sm text-gray-600">Uptime</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Dashboard Preview -->
                <div class="hidden lg:block relative">
                    <!-- Main dashboard card -->
                    <div class="bg-white/80 backdrop-blur-xl rounded-2xl shadow-2xl p-6 border border-gray-200/50">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-sm text-gray-500">Dashboard Preview</span>
                        </div>
                        
                        <!-- Mock Chart -->
                        <div class="h-32 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-xl mb-4 flex items-end p-3">
                            <div class="w-1/6 h-16 bg-blue-500 rounded-t-lg mx-1"></div>
                            <div class="w-1/6 h-24 bg-indigo-500 rounded-t-lg mx-1"></div>
                            <div class="w-1/6 h-20 bg-blue-500 rounded-t-lg mx-1"></div>
                            <div class="w-1/6 h-28 bg-indigo-500 rounded-t-lg mx-1"></div>
                            <div class="w-1/6 h-12 bg-blue-500 rounded-t-lg mx-1"></div>
                            <div class="w-1/6 h-22 bg-indigo-500 rounded-t-lg mx-1"></div>
                        </div>
                        
                        <!-- Mock Stats -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="bg-gray-50 rounded-lg p-3">
                                <div class="text-xs text-gray-500">Total Products</div>
                                <div class="text-lg font-bold text-gray-900">1,234</div>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-3">
                                <div class="text-xs text-gray-500">Low Stock</div>
                                <div class="text-lg font-bold text-amber-600">23</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating elements for visual interest -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-500 rounded-2xl rotate-12 opacity-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-indigo-500 rounded-2xl -rotate-12 opacity-10"></div>
                </div>
            </div>
        </div>
    </main>

    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        
        .animate-blob {
            animation: blob 7s infinite;
        }
        
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</body>
</html>