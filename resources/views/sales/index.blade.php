@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Sales</h1>

{{-- Sale Form --}}
<form action="{{ route('sales.store') }}" method="POST" class="bg-white p-6 shadow rounded mb-6 space-y-4">
    @csrf

    <select name="product_id" class="w-full p-2 border rounded" required>
        <option value="">Select Product</option>
        @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }} (Stock: {{ $product->stock }})</option>
        @endforeach
    </select>

    <input type="number" name="quantity" placeholder="Quantity" class="w-full p-2 border rounded" min="1" required>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Record Sale</button>
</form>

{{-- Sale List --}}
<table class="min-w-full bg-white shadow-md rounded">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-2">ID</th>
            <th class="p-2">Product</th>
            <th class="p-2">Quantity</th>
            <th class="p-2">Total Price</th>
            <th class="p-2">Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $sale)
        <tr class="border-t hover:bg-gray-50">
            <td class="p-2">{{ $sale->id }}</td>
            <td class="p-2">{{ $sale->product->name }}</td>
            <td class="p-2">{{ $sale->quantity }}</td>
            <td class="p-2">₱{{ number_format($sale->total_price, 2) }}</td>
            <td class="p-2">{{ $sale->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection