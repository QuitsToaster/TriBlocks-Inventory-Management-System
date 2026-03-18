<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TriBlocks Inventory System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center text-center">

        <h1 class="text-4xl font-bold text-blue-600 mb-4">
            TriBlocks Inventory Management System
        </h1>

        <p class="text-gray-600 mb-6">
            Manage your products, suppliers, stocks, and sales efficiently.
        </p>

        <div class="space-x-4">
            <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-2 rounded">
                Login
            </a>

            <a href="{{ route('register') }}" class="bg-green-500 text-white px-6 py-2 rounded">
                Register
            </a>
        </div>

    </div>

</body>
</html>