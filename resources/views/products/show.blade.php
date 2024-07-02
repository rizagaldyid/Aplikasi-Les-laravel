@extends('layouts.main')
@section('title', 'Details Produk')
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

        <div class="container ml-5 mr-5">
            <div class="card">
                
            <div class="container mb-5">
            <h1>{{ $product->product_name }}</h1>
            <p>{{ $product->description }}</p>
            <p>Price: Rp. {{ number_format($product->price,0) }}</p>
            <p>Date: {{ $product->date }}</p>
            <p>Time: {{ $product->time}}</p>
            <p>Duration: {{ $product->duration }} minutes</p>
            <p>Location: {{ $product->location }}</p>
            <p>Teacher: {{ $product->teacher->first_name }} {{ $product->teacher->last_name }}</p>
            <form action="{{ route('products.purchase', $product->id) }}" method="POST">
                @csrf
                @include('sweetalert::alert')
                <button  type="submit" class="btn btn-primary">Purchase Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>

                @if(Auth::check() && Auth::user()->is_admin)
                    <a href="{{ route('admin.product_purchases.index') }}" class="btn btn-warning">Back to Products admin</a>
                @endif
            </form>
            </div>  
        </div>
        </div>
</div>

@endsection

