@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Sales</h1>

<table class="w-full bg-white shadow">
    <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $sale)
        <tr>
            <td>{{ $sale->product->name }}</td>
            <td>{{ $sale->quantity }}</td>
            <td>₱{{ $sale->total_price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection