@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Stock Management</h1>

{{-- Stock Form --}}
<form action="{{ route('stocks.store') }}" method="POST" class="bg-white p-6 shadow rounded mb-6 space-y-4">
    @csrf

    <select name="product_id" class="w-full p-2 border rounded" required>
        <option value="">Select Product</option>
        @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>

    <select name="type" class="w-full p-2 border rounded" required>
        <option value="in">Stock In</option>
        <option value="out">Stock Out</option>
    </select>

    <input type="number" name="quantity" placeholder="Quantity" class="w-full p-2 border rounded" min="1" required>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update Stock</button>
</form>

{{-- Stock List --}}
<table class="min-w-full bg-white shadow-md rounded">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-2">ID</th>
            <th class="p-2">Product</th>
            <th class="p-2">Type</th>
            <th class="p-2">Quantity</th>
            <th class="p-2">Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stocks as $stock)
        <tr class="border-t hover:bg-gray-50">
            <td class="p-2">{{ $stock->id }}</td>
            <td class="p-2">{{ $stock->product->name }}</td>
            <td class="p-2">{{ ucfirst($stock->type) }}</td>
            <td class="p-2">{{ $stock->quantity }}</td>
            <td class="p-2">{{ $stock->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection