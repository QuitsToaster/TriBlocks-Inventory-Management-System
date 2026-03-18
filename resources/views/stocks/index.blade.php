@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Stock Management</h1>

<form action="/stocks" method="POST" class="space-y-2">
    @csrf

    <select name="product_id" class="w-full p-2 border">
        @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>

    <select name="type" class="w-full p-2 border">
        <option value="in">Stock In</option>
        <option value="out">Stock Out</option>
    </select>

    <input type="number" name="quantity" placeholder="Quantity" class="w-full p-2 border">

    <button class="bg-green-500 text-white px-4 py-2">Submit</button>
</form>
@endsection