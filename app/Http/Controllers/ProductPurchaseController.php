<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductPurchase;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductPurchaseController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function purchase(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Create a payment
        $payment = Payment::create([
            'user_id' => Auth::id(),
            'student_id' => Auth::user()->student->id,
            'amount' => $product->price,
            'payment_date' => now(),
            'payment_method' => 'credit_card', // Assuming credit card for now
            'status' => 'completed',
        ]);

        // Create a product purchase
        $productPurchase = ProductPurchase::create([
            'product_id' => $product->id,
            'user_id' => Auth::id(),
            'payment_id' => $payment->id,
        ]);


        // Set success alert
        Alert::success('Purchase successful!', 'Your purchase has been completed successfully.');
        // Redirect back with success message
        return redirect()->route('products.index')->with('success', 'Purchase successful!');
    }

    public function adminIndex()
    {
        $productPurchases = ProductPurchase::with(['user', 'product', 'payment'])->get();
        return view('admin.product_purchases.index', compact('productPurchases'));
    }
}
