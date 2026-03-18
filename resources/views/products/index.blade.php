@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Products</h1>

<div class="flex justify-between mb-4">
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        + Add Product
    </a>
</div>

<table class="min-w-full bg-white shadow-md rounded">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-2">ID</th>
            <th class="p-2">Name</th>
            <th class="p-2">Category</th>
            <th class="p-2">Brand</th>
            <th class="p-2">Stock</th>
            <th class="p-2">Price</th>
            <th class="p-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr class="border-t hover:bg-gray-50">
            <td class="p-2">{{ $product->id }}</td>
            <td class="p-2">{{ $product->name }}</td>
            <td class="p-2">{{ $product->category ?? '-' }}</td>
            <td class="p-2">{{ $product->brand ?? '-' }}</td>
            <td class="p-2">
                {{ $product->stock }}
                @if($product->stock <= 10)
                    <span class="text-red-500 font-semibold">(Low)</span>
                @endif
            </td>
            <td class="p-2">₱{{ number_format($product->price, 2) }}</td>
            <td class="p-2 flex gap-2">
                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection