<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Payment;

use App\Models\Product;
use App\Models\Teacher;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = User::count();
        $teacher = Teacher::count();
        $products = Product::count();
        $payment = Payment::sum('amount');

        return view('landing.dashboard', [
            'user' => $user,
            'teacher' => $teacher,
            'products' => $products,
            'payment' => $payment,
        ]);
    }

   
}
