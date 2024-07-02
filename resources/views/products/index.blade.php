@extends('layouts.main')
@section('title', 'Products')
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
<div class="container" align="end">
    @if(Auth::check() && Auth::user()->is_admin)
    <a href="{{ route('products.create') }}" class="btn btn-success " align="end">Create</a>
    @endif
</div>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <p class="card-text">Price: Rp. {{ number_format($product->price,0) }}</p>
                            <p class="card-text">Date: {{ $product->date }}</p>
                            <p class="card-text">Time: {{ $product->time }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                            @if(Auth::check() && Auth::user()->is_admin)
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>

                        @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
