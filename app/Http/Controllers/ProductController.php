<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        
        return view('products.form', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'duration' => 'required|integer',
            'location' => 'required|string|max:100',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        Product::create($request->all());
        // Set success alert
        Alert::success('Create successful!', 'Your create has been completed successfully.');
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $teachers = Teacher::all();
        return view('products.form', compact('product', 'teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|',
            'duration' => 'required|integer',
            'location' => 'required|string|max:100',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }
}
