@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Suppliers</h1>

<a href="{{ route('suppliers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Add Supplier</a>

<table class="min-w-full bg-white shadow-md rounded mt-4">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-2">ID</th>
            <th class="p-2">Name</th>
            <th class="p-2">Contact</th>
            <th class="p-2">Email</th>
            <th class="p-2">Address</th>
            <th class="p-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)
        <tr class="border-t hover:bg-gray-50">
            <td class="p-2">{{ $supplier->id }}</td>
            <td class="p-2">{{ $supplier->name }}</td>
            <td class="p-2">{{ $supplier->contact ?? '-' }}</td>
            <td class="p-2">{{ $supplier->email ?? '-' }}</td>
            <td class="p-2">{{ $supplier->address ?? '-' }}</td>
            <td class="p-2 flex gap-2">
                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" onsubmit="return confirm('Delete this supplier?');">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500 hover:underline">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection