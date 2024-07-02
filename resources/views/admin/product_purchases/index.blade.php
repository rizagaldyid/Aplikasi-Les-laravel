@extends('layouts.main')
@section('title', 'Product Purchase')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Payment Date</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productPurchases as $purchase)
                    <tr>
                        <td>{{ $purchase->id }}</td>
                        <td>{{ $purchase->user->name }}</td>
                        <td>{{ $purchase->product->product_name }}</td>
                        <td>${{ $purchase->payment->amount }}</td>
                        <td>{{ $purchase->payment->payment_date }}</td>
                        <td>{{ $purchase->payment->payment_method }}</td>
                        <td>{{ $purchase->payment->status }}</td>
                        <td>
                            
                            <a href="{{ route('products.show', $purchase->product->id) }}" class="btn btn-info">View</a>
                            @if(Auth::check() && Auth::user()->is_admin)
                                <a href="{{ route('products.edit', $purchase->product->id) }}" class="btn btn-warning">Edit</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
