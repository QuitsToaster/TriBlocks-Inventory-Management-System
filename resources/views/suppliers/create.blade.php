@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Add Supplier</h1>

<form action="{{ route('suppliers.store') }}" method="POST" class="bg-white p-6 shadow rounded space-y-4">
    @csrf
    <input type="text" name="name" placeholder="Supplier Name" class="w-full p-2 border rounded" required>
    <input type="text" name="contact" placeholder="Contact Number" class="w-full p-2 border rounded">
    <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded">
    <textarea name="address" placeholder="Address" class="w-full p-2 border rounded"></textarea>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Supplier</button>
</form>
@endsection