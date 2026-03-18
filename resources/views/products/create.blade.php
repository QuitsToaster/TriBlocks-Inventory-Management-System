@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Add Product</h1>

<form action="/products" method="POST" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Product Name" class="w-full p-2 border">
    <input type="number" name="stock" placeholder="Stock" class="w-full p-2 border">
    <input type="number" step="0.01" name="price" placeholder="Price" class="w-full p-2 border">

    <button class="bg-green-500 text-white px-4 py-2">Save</button>
</form>
@endsection