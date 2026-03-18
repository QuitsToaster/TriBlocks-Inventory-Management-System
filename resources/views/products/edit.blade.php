@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Product</h1>

<form action="/products/{{ $product->id }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border">
    <input type="number" name="stock" value="{{ $product->stock }}" class="w-full p-2 border">
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="w-full p-2 border">

    <button class="bg-blue-500 text-white px-4 py-2">Update</button>
</form>
@endsection