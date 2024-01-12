<?php

namespace App\Http\Controllers;

use App\Models\LunarProduct;
use Illuminate\Http\Request;

class LunarProductController extends Controller
{
    public function index()
    {
        $products = LunarProduct::all();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = LunarProduct::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Add validation as needed
        $product = LunarProduct::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = LunarProduct::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = LunarProduct::findOrFail($id);

        // Add validation and update logic as needed
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = LunarProduct::findOrFail($id);

        // Add any additional logic before deletion if needed
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
