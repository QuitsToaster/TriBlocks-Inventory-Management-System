@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<div class="grid grid-cols-3 gap-4">

    <div class="bg-white p-4 shadow rounded">
        <h2>Total Products</h2>
        <p class="text-xl font-bold">{{ $totalProducts }}</p>
    </div>

    <div class="bg-white p-4 shadow rounded">
        <h2>Total Sales</h2>
        <p class="text-xl font-bold">₱{{ $totalSales }}</p>
    </div>

    <div class="bg-white p-4 shadow rounded">
        <h2>Low Stocks</h2>
        <p class="text-xl font-bold text-red-500">{{ $lowStocks }}</p>
    </div>

</div>
@endsection