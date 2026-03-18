@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Supplier</h1>

<form action="{{ route('suppliers.update', $supplier->id) }}" method="POST" class="bg-white p-6 shadow rounded space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $supplier->name }}" class="w-full p-2 border rounded" required>
    <input type="text" name="contact" value="{{ $supplier->contact }}" class="w-full p-2 border rounded">
    <input type="email" name="email" value="{{ $supplier->email }}" class="w-full p-2 border rounded">
    <textarea name="address" class="w-full p-2 border rounded">{{ $supplier->address }}</textarea>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Supplier</button>
</form>
@endsection