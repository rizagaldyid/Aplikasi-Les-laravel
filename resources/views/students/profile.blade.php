@extends('layouts.main')
@section('title', 'Profile')
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

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <p class="form-control">{{ auth()->user()->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <p class="form-control">{{ auth()->user()->email }}</p>
        </div>
       

        
       

    </div>
</div>
@endsection
