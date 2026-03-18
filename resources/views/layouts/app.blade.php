<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TriBlocks Inventory System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100">

    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="flex">
        
        {{-- Sidebar --}}
        @include('partials.sidebar')

        {{-- Content --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>