@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white p-6 shadow rounded space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block font-semibold mb-1">Product Name</label>
        <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border rounded" required>
    </div>

    <div>
        <label class="block font-semibold mb-1">Category</label>
        <input type="text" name="category" value="{{ $product->category }}" class="w-full p-2 border rounded">
    </div>

    <div>
        <label class="block font-semibold mb-1">Brand</label>
        <input type="text" name="brand" value="{{ $product->brand }}" class="w-full p-2 border rounded">
    </div>

    <div>
        <label class="block font-semibold mb-1">Stock</label>
        <input type="number" name="stock" value="{{ $product->stock }}" class="w-full p-2 border rounded" min="0" required>
    </div>

    <div>
        <label class="block font-semibold mb-1">Price</label>
        <input type="number" name="price" value="{{ $product->price }}" class="w-full p-2 border rounded" step="0.01" min="0" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Update Product
    </button>
</form>
@endsection