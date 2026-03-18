@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Products</h1>

<a href="/products/create" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>

<table class="w-full mt-4 bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-200">
            <th class="p-2">Name</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr class="border-t">
            <td class="p-2">{{ $product->name }}</td>
            <td>
                {{ $product->stock }}
                @if($product->stock <= 10)
                    <span class="text-red-500">(Low)</span>
                @endif
            </td>
            <td>₱{{ $product->price }}</td>
            <td>
                <a href="/products/{{ $product->id }}/edit" class="text-blue-500">Edit</a>
                <form action="/products/{{ $product->id }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection