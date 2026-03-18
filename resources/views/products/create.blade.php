@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Add New Product</h1>

<form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 shadow rounded space-y-4">
    @csrf

    <div>
        <label class="block font-semibold mb-1">Product Name</label>
        <input type="text" name="name" class="w-full p-2 border rounded" placeholder="Enter product name" required>
    </div>

    <div>
        <label class="block font-semibold mb-1">Category</label>
        <input type="text" name="category" class="w-full p-2 border rounded" placeholder="Enter category (optional)">
    </div>

    <div>
        <label class="block font-semibold mb-1">Brand</label>
        <input type="text" name="brand" class="w-full p-2 border rounded" placeholder="Enter brand (optional)">
    </div>

    <div>
        <label class="block font-semibold mb-1">Stock</label>
        <input type="number" name="stock" class="w-full p-2 border rounded" placeholder="Enter stock quantity" min="0" required>
    </div>

    <div>
        <label class="block font-semibold mb-1">Price</label>
        <input type="number" name="price" class="w-full p-2 border rounded" placeholder="Enter price" step="0.01" min="0" required>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        Save Product
    </button>
</form>
@endsection