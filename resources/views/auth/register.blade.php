<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TriBlocks Inventory System</title>
    
    @vite('resources/css/app.css')
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body class="font-['Inter'] antialiased bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen">

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
                <a href="/" class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">T</span>
                    </div>
                    <span class="font-semibold text-gray-800">TriBlocks Inventory</span>
                </a>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600">Already have an account?</span>
                    <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-lg hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-200 text-sm font-medium">
                        Sign in
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 pt-16 py-12">
        <div class="max-w-md w-full">
            <!-- Brand Section -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl shadow-lg shadow-blue-500/25 mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900">Create an account</h2>
                <p class="text-gray-600 mt-2">Start managing your inventory efficiently</p>
            </div>

            <!-- Registration Form -->
            <div class="bg-white/80 backdrop-blur-xl rounded-2xl shadow-xl border border-gray-200/50 p-8">
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                            Full name
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl bg-white/50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('name') border-red-500 @enderror"
                                placeholder="John Doe">
                        </div>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl bg-white/50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('email') border-red-500 @enderror"
                                placeholder="you@company.com">
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input id="password" type="password" name="password" required
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl bg-white/50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('password') border-red-500 @enderror"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                            Confirm password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl bg-white/50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="text-gray-600">
                                I agree to the 
                                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Terms of Service</a>
                                and 
                                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <!-- Password Strength Indicator (optional) -->
                    <div class="space-y-1">
                        <div class="flex space-x-1 h-1">
                            <div class="flex-1 bg-gray-200 rounded-full">
                                <div class="h-full w-0 bg-green-500 rounded-full transition-all duration-300" id="password-strength"></div>
                            </div>
                            <div class="flex-1 bg-gray-200 rounded-full">
                                <div class="h-full w-0 bg-green-500 rounded-full transition-all duration-300" id="password-strength-2"></div>
                            </div>
                            <div class="flex-1 bg-gray-200 rounded-full">
                                <div class="h-full w-0 bg-green-500 rounded-full transition-all duration-300" id="password-strength-3"></div>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500" id="password-strength-text">Use at least 8 characters</p>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-4 rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-200 transform hover:scale-[1.02] font-medium text-lg mt-6">
                        Create account
                    </button>

                    <!-- Social Registration (optional) -->
                    <div class="relative mt-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white/80 text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <button type="button" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-xl bg-white/50 hover:bg-white hover:shadow-md transition-all duration-200">
                            <svg class="h-5 w-5 text-gray-700" viewBox="0 0 24 24">
                                <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z" fill="currentColor"/>
                            </svg>
                            <span class="ml-2 text-sm text-gray-600">Google</span>
                        </button>
                        <button type="button" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-xl bg-white/50 hover:bg-white hover:shadow-md transition-all duration-200">
                            <svg class="h-5 w-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.99h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.99C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                            <span class="ml-2 text-sm text-gray-600">Facebook</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Login Link -->
            <p class="text-center text-sm text-gray-600 mt-6">
                Already have an account? 
                <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-700">
                    Sign in here
                </a>
            </p>
        </div>
    </div>

    <script>
        // Simple password strength indicator
        document.getElementById('password').addEventListener('input', function(e) {
            const password = e.target.value;
            const strength = Math.min(password.length / 12, 1); // Simple strength based on length
            
            const bars = [
                document.getElementById('password-strength'),
                document.getElementById('password-strength-2'),
                document.getElementById('password-strength-3')
            ];
            
            const strengthText = document.getElementById('password-strength-text');
            
            if (password.length === 0) {
                bars.forEach(bar => bar.style.width = '0%');
                strengthText.textContent = 'Use at least 8 characters';
                strengthText.className = 'text-xs text-gray-500';
            } else if (password.length < 8) {
                bars[0].style.width = '100%';
                bars[1].style.width = '0%';
                bars[2].style.width = '0%';
                strengthText.textContent = 'Weak - too short';
                strengthText.className = 'text-xs text-red-500';
            } else if (password.length < 10) {
                bars[0].style.width = '100%';
                bars[1].style.width = '100%';
                bars[2].style.width = '0%';
                strengthText.textContent = 'Medium - getting better';
                strengthText.className = 'text-xs text-yellow-500';
            } else {
                bars[0].style.width = '100%';
                bars[1].style.width = '100%';
                bars[2].style.width = '100%';
                strengthText.textContent = 'Strong password';
                strengthText.className = 'text-xs text-green-500';
            }
        });
    </script>

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