<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('product')->latest()->get();
        $products = Product::all();
        return view('sales.index', compact('sales', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        if ($request->quantity > $product->stock) {
            return redirect()->back()->withErrors(['quantity' => 'Insufficient stock']);
        }

        $product->stock -= $request->quantity;
        $product->save();

        $total_price = $product->price * $request->quantity;

        Sale::create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
        ]);

        return redirect()->route('sales.index')->with('success', 'Sale recorded successfully!');
    }

    public function total()
{
    // Calculate total sales
    $total = Sale::sum('total_price');

    // Return as JSON
    return response()->json([
        'total' => number_format($total, 2, '.', ',') // formatted number
    ]);
}
}